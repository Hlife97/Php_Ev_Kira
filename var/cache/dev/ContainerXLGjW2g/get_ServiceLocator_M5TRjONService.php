<?php

namespace ContainerXLGjW2g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M5TRjONService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.m5TRjON' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.m5TRjON'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'setting' => ['privates', '.errored..service_locator.m5TRjON.App\\Entity\\Setting', NULL, 'Cannot autowire service ".service_locator.m5TRjON": it references class "App\\Entity\\Setting" but no such service exists.'],
        ], [
            'setting' => 'App\\Entity\\Setting',
        ]);
    }
}
