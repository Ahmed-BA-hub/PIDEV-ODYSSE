<?php

namespace ContainerRMjUOWU;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1wfHddhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1wfHddh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1wfHddh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reservationProgramme' => ['privates', '.errored..service_locator.1wfHddh.App\\Entity\\ReservationProgramme', NULL, 'Cannot autowire service ".service_locator.1wfHddh": it needs an instance of "App\\Entity\\ReservationProgramme" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'reservationProgramme' => 'App\\Entity\\ReservationProgramme',
        ]);
    }
}
