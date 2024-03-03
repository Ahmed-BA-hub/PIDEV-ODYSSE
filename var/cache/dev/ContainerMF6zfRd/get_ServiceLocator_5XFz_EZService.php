<?php

namespace ContainerMF6zfRd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5XFz_EZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5XFz.EZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5XFz.EZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'hotel' => ['privates', '.errored..service_locator.5XFz.EZ.App\\Entity\\Hotel', NULL, 'Cannot autowire service ".service_locator.5XFz.EZ": it needs an instance of "App\\Entity\\Hotel" but this type has been excluded in "config/services.yaml".'],
        ], [
            'hotel' => 'App\\Entity\\Hotel',
        ]);
    }
}
