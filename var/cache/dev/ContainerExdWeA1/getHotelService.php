<?php

namespace ContainerExdWeA1;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHotelService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.5XFz.EZ.App\Entity\Hotel' shared service.
     *
     * @return \App\Entity\Hotel
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.5XFz.EZ": it needs an instance of "App\\Entity\\Hotel" but this type has been excluded in "config/services.yaml".');
    }
}
