<?php

namespace App\Controller;

use App\Document\Pedido;
use App\Repository\UsuarioRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReadPreference;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/pedido')]
class PedidoController extends AbstractController {

    #[Route('/create', name: 'crear_pedido', methods: ['POST'])]
    public function create(DocumentManager $dm, UsuarioRepository $usuarioRepository, Request $request) : JsonResponse{
        $usuario=$usuarioRepository->findOneBy(['email'=>$request->get('email')]);

        if(!$usuario){
            return $this->json(['mensaje'=>'Usuario no existe']);
        }

        $pedido=new Pedido();

        $pedido->setUserId($usuario->getId());
        $pedido->setNombreProducto($request->get('nombre_producto'));
        $pedido->setCantidad($request->get('cantidad'));
        $pedido->setPrecioUnitario($request->get('precio_unitario'));

        $dm->persist($pedido); //Preparamos a la bd para recibir los datos
        $dm->flush(); //Ejecutamos el query

        return $this->json($pedido)->setStatusCode(200);
    }

    #[Route('/listar', name: 'list_pedidos', methods: ['GET'])]
    public function list(DocumentManager $dm){
        $arregloPedidos=array();

        foreach($dm->getRepository(Pedido::class)->findAll() as $pedidos){
            $arregloPedidos[]=array(
                'id'=>$pedidos->getId(),
                'user_id'=>$pedidos->getUserId(),
                'nombre_producto'=>$pedidos->getNombreProducto(),
                'precio_unitario'=>$pedidos->getPrecioUnitario(),
                'cantidad'=>$pedidos->getCantidad(),
                'total'=>$pedidos->calcularTotal()
            );
        }

        return $this->json($arregloPedidos)->setStatusCode(200);
    }

    #[Route('/{email}', name: 'leer_pedido', methods: ['GET'])]
    public function read(UsuarioRepository $usuarioRepository, DocumentManager $dm, string $email){
        $usuario=$usuarioRepository->findOneBy(['email'=>$email]); //Obtengo el usuario por su email

        if(!$usuario){ //Si no está el usuario
            return $this->json(['mensaje'=>'Usuario no encontrado'])->setStatusCode(400);
        }

        $pedido=$dm->getRepository(Pedido::class)->findBy(['user_id'=>$usuario->getId()]);

        return $this->json($pedido)->setStatusCode(200);
    }

    public function update(){

    }

    #[Route('/{id}', name: 'delete_pedido', methods: ['DELETE'])]
    public function delete(string $id, DocumentManager $dm){
        $pedido=$dm->getRepository(Pedido::class)->find($id); //Buscamos el id del pedido

        if(!$pedido){
            return $this->json(['mensaje'=>'Id no encontrado'])->setStatusCode(400);
        }

        $dm->remove($pedido);
        $dm->flush(); //Ejecutamos query

        return $this->json(['mensaje'=>'Eliminado con exito'])->setStatusCode(200);
    }
}