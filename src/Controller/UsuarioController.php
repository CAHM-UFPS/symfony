<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Form\UsuarioType;
use App\Repository\UsuarioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/usuario')]
class UsuarioController extends AbstractController
{
    #[Route('/list', name: 'app_usuario_index', methods: ['GET'])]
    public function index(UsuarioRepository $usuarioRepository): JsonResponse
    {
        $arregloUsuarios=array();

        foreach ($usuarioRepository->findAll() as $usuario){
            $arregloUsuarios[]=array(
                    'id'=>$usuario->getId(),
                    'nombre'=>$usuario->getNombre(),
                    'apellido'=>$usuario->getApellido(),
                    'email'=>$usuario->getEmail(),
                    'sexo'=>$usuario->getSexo()
            );
        }

        return $this->json($arregloUsuarios)->setStatusCode(200);
    }

    #[Route('/new', name: 'app_usuario_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UsuarioRepository $usuarioRepository, ValidatorInterface $validator): JsonResponse
    {
        $usuario = new Usuario();

        try{
            $usuario->setNombre($request->get('nombre'))
                ->setApellido($request->get('apellido'))
                ->setEmail($request->get('email'))
                ->setSexo($request->get('sexo'));

            $errors = $validator->validate($usuario);

            if (count($errors) > 0) {
                return $this->json($errors)->setStatusCode(400);
            }

            $usuarioRepository->add($usuario, true);
        }catch(\Exception $error){
            return $this->json([
                'mensaje'=>"No pueden existir campos nulos"
            ])->setStatusCode(400);
        }

        return $this->json($usuario)->setStatusCode(200);
    }

    #[Route('/{id}', name: 'app_usuario_show', methods: ['GET'])]
    public function show(int $id, UsuarioRepository $repository): JsonResponse
    {
        $usuario=$repository->find($id);

        if(!$usuario){
            return $this->json(['mensaje'=>'Id no encontrado'])->setStatusCode(404);
        }

        return $this->json($usuario)->setStatusCode(200);
    }

    #[Route('/{id}/edit', name: 'app_usuario_edit', methods: ['POST'])]
    public function edit(Request $request, Usuario $usuario, UsuarioRepository $usuarioRepository, ValidatorInterface $validator): JsonResponse
    {
        try{
            if(!empty($usuarioRepository->find($request->get('id')))){
                $usuario->setNombre($request->get('nombre'))
                    ->setApellido($request->get('apellido'))
                    ->setEmail($request->get('email'))
                    ->setSexo($request->get('sexo'));

                $errores=$validator->validate($usuario);

                if(count($errores)>0) return $this->json($errores);

                $usuarioRepository->add($usuario, true);
            }
        }catch(\Exception $error){
            return $this->json([
                'mensaje'=>'No pueden existir campos nulos'
            ])->setStatusCode(400);
        }


        return $this->json($usuario)->setStatusCode(200);
    }

    #[Route('/{id}', name: 'app_usuario_delete', methods: ['POST'])]
    public function delete(int $id, UsuarioRepository $repository): JsonResponse
    {
        $usuario=$repository->find($id);

        if(!$usuario){
            return $this->json(['mensaje'=>'Id no encontrado'])->setStatusCode(404);
        }

        $repository->remove($usuario, true);

        return $this->json(['mensaje'=>"Usuario Eliminado"])->setStatusCode(200);
    }
}
