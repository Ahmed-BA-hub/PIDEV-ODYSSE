<?php

namespace ContainerHNrfT2e;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ETz93yTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ETz93yT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ETz93yT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repo' => ['privates', '.errored.UgS49nM', NULL, 'Cannot determine controller argument for "App\\Controller\\ReservationProgrammeController::new()": the $repo argument is type-hinted with the non-existent class or interface: "App\\Controller\\ProgrameRepository". Did you forget to add a use statement?'],
        ], [
            'entityManager' => '?',
            'repo' => '?',
        ]);
    }
}
