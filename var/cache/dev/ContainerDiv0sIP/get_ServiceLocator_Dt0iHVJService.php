<?php

namespace ContainerDiv0sIP;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dt0iHVJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Dt0iHVJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Dt0iHVJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'programe' => ['privates', '.errored..service_locator.Dt0iHVJ.App\\Entity\\Programe', NULL, 'Cannot autowire service ".service_locator.Dt0iHVJ": it needs an instance of "App\\Entity\\Programe" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'programe' => 'App\\Entity\\Programe',
        ]);
    }
}
