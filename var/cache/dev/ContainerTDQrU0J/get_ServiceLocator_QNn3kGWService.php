<?php

namespace ContainerTDQrU0J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QNn3kGWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qNn3kGW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qNn3kGW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ev' => ['privates', '.errored..service_locator.qNn3kGW.App\\Entity\\Ev', NULL, 'Cannot autowire service ".service_locator.qNn3kGW": it references class "App\\Entity\\Ev" but no such service exists.'],
        ], [
            'ev' => 'App\\Entity\\Ev',
        ]);
    }
}
