<?php

namespace ContainerJnrlPmj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__EphVwXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..EphVwX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..EphVwX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reservationProgramme' => ['privates', '.errored..service_locator..EphVwX.App\\Entity\\ReservationProgramme', NULL, 'Cannot autowire service ".service_locator..EphVwX": it needs an instance of "App\\Entity\\ReservationProgramme" but this type has been excluded in "config/services.yaml".'],
        ], [
            'reservationProgramme' => 'App\\Entity\\ReservationProgramme',
        ]);
    }
}
