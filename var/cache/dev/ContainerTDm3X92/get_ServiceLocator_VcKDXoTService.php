<?php

namespace ContainerTDm3X92;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VcKDXoTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vcKDXoT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vcKDXoT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'home' => ['privates', '.errored..service_locator.vcKDXoT.App\\Entity\\Admin\\Homes', NULL, 'Cannot autowire service ".service_locator.vcKDXoT": it references class "App\\Entity\\Admin\\Homes" but no such service exists.'],
        ], [
            'home' => 'App\\Entity\\Admin\\Homes',
        ]);
    }
}
