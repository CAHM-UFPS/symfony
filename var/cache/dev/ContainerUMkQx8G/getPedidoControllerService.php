<?php

namespace ContainerUMkQx8G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPedidoControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PedidoController' shared autowired service.
     *
     * @return \App\Controller\PedidoController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PedidoController.php';

        $container->services['App\\Controller\\PedidoController'] = $instance = new \App\Controller\PedidoController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\PedidoController', $container));

        return $instance;
    }
}