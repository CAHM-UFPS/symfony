<?php

namespace ContainerVsMFoZ4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_42AiaiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4_2Aiai' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4_2Aiai'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'usuario' => ['privates', '.errored..service_locator.4_2Aiai.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.4_2Aiai": it references class "App\\Entity\\Usuario" but no such service exists.'],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', true],
            'validator' => ['privates', 'validator', 'getValidatorService', true],
        ], [
            'usuario' => 'App\\Entity\\Usuario',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
            'validator' => '?',
        ]);
    }
}
