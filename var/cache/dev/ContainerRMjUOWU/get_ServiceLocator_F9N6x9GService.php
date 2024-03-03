<?php

namespace ContainerRMjUOWU;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F9N6x9GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f9N6x9G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f9N6x9G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'reservationHotelRepository' => ['privates', 'App\\Repository\\ReservationHotelRepository', 'getReservationHotelRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\UserRepository',
            'reservationHotelRepository' => 'App\\Repository\\ReservationHotelRepository',
        ]);
    }
}
