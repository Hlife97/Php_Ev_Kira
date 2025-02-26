<?php

namespace ContainerTDm3X92;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MpfsMseService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MpfsMse' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MpfsMse'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservation' => ['privates', '.errored..service_locator.MpfsMse.App\\Entity\\Admin\\Reservation', NULL, 'Cannot autowire service ".service_locator.MpfsMse": it references class "App\\Entity\\Admin\\Reservation" but no such service exists.'],
        ], [
            'reservation' => 'App\\Entity\\Admin\\Reservation',
        ]);
    }
}
