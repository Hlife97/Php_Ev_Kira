<?php

namespace Container3w6vYsr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GA6au5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gA6au_5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gA6au_5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'image' => ['privates', '.errored.wWhOPBL', NULL, 'Cannot determine controller argument for "App\\Controller\\Admin\\ImageController::show()": the $image argument is type-hinted with the non-existent class or interface: "App\\Entity\\Admin\\Image".'],
        ], [
            'image' => '?',
        ]);
    }
}
