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

#[Route('/usuario')]
class UsuarioController extends AbstractController
{
    #[Route('/list', name: 'app_usuario_index', methods: ['GET'])]
    public function index(UsuarioRepository $usuarioRepository): JsonResponse
    {
        $arregloUsuarios=array();

        foreach ($usuarioRepository->findAll() as $usuario){
            $arregloUsuarios[]=array(
                'data'=>[
                    'id'=>$usuario->getId(),
                    'nombre'=>$usuario->getNombre(),
                    'apellido'=>$usuario->getApellido(),
                    'email'=>$usuario->getEmail(),
                    'sexo'=>$usuario->getSexo()
                ]
            );
        }

        return new JsonResponse($arregloUsuarios);
    }

    #[Route('/new', name: 'app_usuario_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UsuarioRepository $usuarioRepository): Response
    {
        $usuario = new Usuario();
        $usuario->setNombre($request->get('nombre'))
                ->setApellido($request->get('apellido'))
                ->setEmail($request->get('email'))
                ->setSexo($request->get('sexo'));

        $usuarioRepository->add($usuario, true);

        return new JsonResponse([
            'success'=>true,
            'data'=>[
                'id'=>$usuario->getId(),
                'nombre'=>$usuario->getNombre(),
                'apellido'=>$usuario->getApellido(),
                'correo'=>$usuario->getEmail(),
                'sexo'=>$usuario->getSexo()
            ]
        ]);
    }

    #[Route('/{id}', name: 'app_usuario_show', methods: ['GET'])]
    public function show(Usuario $usuario): JsonResponse
    {
        return new JsonResponse([
            'success'=>true,
            'data'=>[
                'id'=>$usuario->getId(),
                'nombre'=>$usuario->getNombre(),
                'apellido'=>$usuario->getApellido(),
                'correo'=>$usuario->getEmail(),
                'sexo'=>$usuario->getSexo()
            ]
        ]);
    }

    #[Route('/{id}/edit', name: 'app_usuario_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Usuario $usuario, UsuarioRepository $usuarioRepository): Response
    {
        $form = $this->createForm(UsuarioType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usuarioRepository->add($usuario, true);

            return $this->redirectToRoute('app_usuario_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('usuario/edit.html.twig', [
            'usuario' => $usuario,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_usuario_delete', methods: ['POST'])]
    public function delete(Request $request, Usuario $usuario, UsuarioRepository $usuarioRepository): Response
    {
        $usuarioRepository->remove($usuario, true);

        return new JsonResponse(['success'=>true]);
    }
}
