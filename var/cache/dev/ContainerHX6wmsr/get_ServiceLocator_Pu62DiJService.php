<?php

namespace ContainerHX6wmsr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pu62DiJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Pu62DiJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Pu62DiJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dm' => ['services', 'doctrine_mongodb.odm.default_document_manager', 'getDoctrineMongodb_Odm_DefaultDocumentManagerService', true],
            'validator' => ['privates', 'validator', 'getValidatorService', true],
        ], [
            'dm' => '?',
            'validator' => '?',
        ]);
    }
}
