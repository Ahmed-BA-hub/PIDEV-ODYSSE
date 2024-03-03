<?php

namespace ContainerWALyKe2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AkICzXXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.akICzXX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.akICzXX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'hotelRepository' => ['privates', 'App\\Repository\\HotelRepository', 'getHotelRepositoryService', true],
        ], [
            'hotelRepository' => 'App\\Repository\\HotelRepository',
        ]);
    }
}
