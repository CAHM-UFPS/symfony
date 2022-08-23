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

    #[Route('/create', name: 'crear_pedido')]
    public function create(DocumentManager $dm, Request $request) : JsonResponse{
        $pedido=new Pedido();

        $pedido->setNombreProducto("Papas");
        $pedido->setCantidad(4);
        $pedido->setPrecioUnitario(5000);
        $pedido->setUserId(1);

        $dm->persist($pedido);
        $dm->flush();

        return $this->json($pedido);
    }

    #[Route('/{email}', name: 'leer_pedido', methods: ['GET'])]
    public function read(UsuarioRepository $usuarioRepository, DocumentManager $dm, Request $request){
        $usuario=$usuarioRepository->findOneBy(['email'=>$request->get('email')]); //Obtengo el usuario por su email

        if(!$usuario){ //Si no está el usuario
            return $this->json(['mensaje'=>'Usuario no encontrado']);
        }

        return $this->json($dm->getRepository(Pedido::class)->findBy(['user_id'=>$usuario->getId()]));
    }

    public function update(){

    }

    public function delete(){

    }
}