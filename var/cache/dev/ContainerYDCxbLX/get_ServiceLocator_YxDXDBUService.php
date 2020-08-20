<?php

namespace ContainerYDCxbLX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YxDXDBUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YxDXDBU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YxDXDBU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comment' => ['privates', '.errored..service_locator.YxDXDBU.App\\Entity\\Admin\\Comment', NULL, 'Cannot autowire service ".service_locator.YxDXDBU": it references class "App\\Entity\\Admin\\Comment" but no such service exists.'],
        ], [
            'comment' => 'App\\Entity\\Admin\\Comment',
        ]);
    }
}
