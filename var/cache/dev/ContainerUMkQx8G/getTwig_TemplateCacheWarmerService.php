<?php

namespace ContainerUMkQx8G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_TemplateCacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/TemplateIterator.php';

        return $container->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'twig' => ['privates', 'twig', 'getTwigService', true],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $container), new \Symfony\Bundle\TwigBundle\TemplateIterator(($container->services['kernel'] ?? $container->get('kernel', 1)), [(\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates'), []));
    }
}
