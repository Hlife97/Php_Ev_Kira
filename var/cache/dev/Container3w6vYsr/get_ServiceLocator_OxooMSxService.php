<?php

namespace Container3w6vYsr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OxooMSxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OxooMSx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OxooMSx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'image' => ['privates', '.errored.z62EZO8', NULL, 'Cannot determine controller argument for "App\\Controller\\Admin\\ImageController::edit()": the $image argument is type-hinted with the non-existent class or interface: "App\\Entity\\Admin\\Image".'],
        ], [
            'image' => '?',
        ]);
    }
}
