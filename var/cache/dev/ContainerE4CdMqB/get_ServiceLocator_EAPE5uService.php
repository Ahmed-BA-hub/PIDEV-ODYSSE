<?php

namespace ContainerE4CdMqB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EAPE5uService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EAPE5u_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EAPE5u_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reservationProgrammeRepository' => ['privates', 'App\\Repository\\ReservationProgrammeRepository', 'getReservationProgrammeRepositoryService', true],
        ], [
            'reservationProgrammeRepository' => 'App\\Repository\\ReservationProgrammeRepository',
        ]);
    }
}
