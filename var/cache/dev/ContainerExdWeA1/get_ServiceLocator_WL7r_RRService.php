<?php

namespace ContainerExdWeA1;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WL7r_RRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wL7r.rR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wL7r.rR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'programe' => ['privates', '.errored..service_locator.wL7r.rR.App\\Entity\\Programe', NULL, 'Cannot autowire service ".service_locator.wL7r.rR": it needs an instance of "App\\Entity\\Programe" but this type has been excluded in "config/services.yaml".'],
        ], [
            'programe' => 'App\\Entity\\Programe',
        ]);
    }
}
