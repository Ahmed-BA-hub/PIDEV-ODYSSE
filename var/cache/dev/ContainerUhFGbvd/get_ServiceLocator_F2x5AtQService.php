<?php

namespace ContainerUhFGbvd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F2x5AtQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F2x5AtQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F2x5AtQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reservationRestaurant' => ['privates', '.errored..service_locator.F2x5AtQ.App\\Entity\\ReservationRestaurant', NULL, 'Cannot autowire service ".service_locator.F2x5AtQ": it needs an instance of "App\\Entity\\ReservationRestaurant" but this type has been excluded in "config/services.yaml".'],
        ], [
            'reservationRestaurant' => 'App\\Entity\\ReservationRestaurant',
        ]);
    }
}
