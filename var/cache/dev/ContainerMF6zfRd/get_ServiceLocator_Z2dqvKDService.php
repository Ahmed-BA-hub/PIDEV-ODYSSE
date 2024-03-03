<?php

namespace ContainerMF6zfRd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z2dqvKDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z2dqvKD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z2dqvKD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'hotel' => ['privates', '.errored..service_locator.z2dqvKD.App\\Entity\\Hotel', NULL, 'Cannot autowire service ".service_locator.z2dqvKD": it needs an instance of "App\\Entity\\Hotel" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'hotel' => 'App\\Entity\\Hotel',
        ]);
    }
}
