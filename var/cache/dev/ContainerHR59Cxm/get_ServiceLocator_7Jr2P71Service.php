<?php

namespace ContainerHR59Cxm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7Jr2P71Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7Jr2P71' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7Jr2P71'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\PedidoController::create' => ['privates', '.service_locator.ESSstOY', 'get_ServiceLocator_ESSstOYService', true],
            'App\\Controller\\PedidoController::delete' => ['privates', '.service_locator.wVIg2DJ', 'get_ServiceLocator_WVIg2DJService', true],
            'App\\Controller\\PedidoController::list' => ['privates', '.service_locator.wVIg2DJ', 'get_ServiceLocator_WVIg2DJService', true],
            'App\\Controller\\PedidoController::read' => ['privates', '.service_locator.ESSstOY', 'get_ServiceLocator_ESSstOYService', true],
            'App\\Controller\\PedidoController::update' => ['privates', '.service_locator.ESSstOY', 'get_ServiceLocator_ESSstOYService', true],
            'App\\Controller\\UsuarioController::delete' => ['privates', '.service_locator.MsgTnMw', 'get_ServiceLocator_MsgTnMwService', true],
            'App\\Controller\\UsuarioController::edit' => ['privates', '.service_locator.4_2Aiai', 'get_ServiceLocator_42AiaiService', true],
            'App\\Controller\\UsuarioController::index' => ['privates', '.service_locator.LDQPZVg', 'get_ServiceLocator_LDQPZVgService', true],
            'App\\Controller\\UsuarioController::new' => ['privates', '.service_locator.Xh2Oofm', 'get_ServiceLocator_Xh2OofmService', true],
            'App\\Controller\\UsuarioController::show' => ['privates', '.service_locator.MsgTnMw', 'get_ServiceLocator_MsgTnMwService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\PedidoController:create' => ['privates', '.service_locator.ESSstOY', 'get_ServiceLocator_ESSstOYService', true],
            'App\\Controller\\PedidoController:delete' => ['privates', '.service_locator.wVIg2DJ', 'get_ServiceLocator_WVIg2DJService', true],
            'App\\Controller\\PedidoController:list' => ['privates', '.service_locator.wVIg2DJ', 'get_ServiceLocator_WVIg2DJService', true],
            'App\\Controller\\PedidoController:read' => ['privates', '.service_locator.ESSstOY', 'get_ServiceLocator_ESSstOYService', true],
            'App\\Controller\\PedidoController:update' => ['privates', '.service_locator.ESSstOY', 'get_ServiceLocator_ESSstOYService', true],
            'App\\Controller\\UsuarioController:delete' => ['privates', '.service_locator.MsgTnMw', 'get_ServiceLocator_MsgTnMwService', true],
            'App\\Controller\\UsuarioController:edit' => ['privates', '.service_locator.4_2Aiai', 'get_ServiceLocator_42AiaiService', true],
            'App\\Controller\\UsuarioController:index' => ['privates', '.service_locator.LDQPZVg', 'get_ServiceLocator_LDQPZVgService', true],
            'App\\Controller\\UsuarioController:new' => ['privates', '.service_locator.Xh2Oofm', 'get_ServiceLocator_Xh2OofmService', true],
            'App\\Controller\\UsuarioController:show' => ['privates', '.service_locator.MsgTnMw', 'get_ServiceLocator_MsgTnMwService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\PedidoController::create' => '?',
            'App\\Controller\\PedidoController::delete' => '?',
            'App\\Controller\\PedidoController::list' => '?',
            'App\\Controller\\PedidoController::read' => '?',
            'App\\Controller\\PedidoController::update' => '?',
            'App\\Controller\\UsuarioController::delete' => '?',
            'App\\Controller\\UsuarioController::edit' => '?',
            'App\\Controller\\UsuarioController::index' => '?',
            'App\\Controller\\UsuarioController::new' => '?',
            'App\\Controller\\UsuarioController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\PedidoController:create' => '?',
            'App\\Controller\\PedidoController:delete' => '?',
            'App\\Controller\\PedidoController:list' => '?',
            'App\\Controller\\PedidoController:read' => '?',
            'App\\Controller\\PedidoController:update' => '?',
            'App\\Controller\\UsuarioController:delete' => '?',
            'App\\Controller\\UsuarioController:edit' => '?',
            'App\\Controller\\UsuarioController:index' => '?',
            'App\\Controller\\UsuarioController:new' => '?',
            'App\\Controller\\UsuarioController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}