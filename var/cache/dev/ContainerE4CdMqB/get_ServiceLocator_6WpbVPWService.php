<?php

namespace ContainerE4CdMqB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6WpbVPWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6WpbVPW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6WpbVPW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'civilisation' => ['privates', '.errored..service_locator.6WpbVPW.App\\Entity\\Civilisation', NULL, 'Cannot autowire service ".service_locator.6WpbVPW": it needs an instance of "App\\Entity\\Civilisation" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'civilisation' => 'App\\Entity\\Civilisation',
            'entityManager' => '?',
        ]);
    }
}
