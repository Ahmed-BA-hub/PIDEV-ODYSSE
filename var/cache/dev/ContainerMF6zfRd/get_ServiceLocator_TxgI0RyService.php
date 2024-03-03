<?php

namespace ContainerMF6zfRd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TxgI0RyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TxgI0Ry' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TxgI0Ry'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reservationHotel' => ['privates', '.errored..service_locator.TxgI0Ry.App\\Entity\\ReservationHotel', NULL, 'Cannot autowire service ".service_locator.TxgI0Ry": it needs an instance of "App\\Entity\\ReservationHotel" but this type has been excluded in "config/services.yaml".'],
        ], [
            'reservationHotel' => 'App\\Entity\\ReservationHotel',
        ]);
    }
}
