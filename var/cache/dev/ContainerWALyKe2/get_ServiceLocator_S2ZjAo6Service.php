<?php

namespace ContainerWALyKe2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S2ZjAo6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.s2ZjAo6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s2ZjAo6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repoUser' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'reservationHotel' => ['privates', '.errored..service_locator.s2ZjAo6.App\\Entity\\ReservationHotel', NULL, 'Cannot autowire service ".service_locator.s2ZjAo6": it needs an instance of "App\\Entity\\ReservationHotel" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'repoUser' => 'App\\Repository\\UserRepository',
            'reservationHotel' => 'App\\Entity\\ReservationHotel',
        ]);
    }
}
