<?php

namespace Container6pbkfm7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_SaDKNARService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.SaDKNAR' shared service.
     *
     * @return \App\Repository\Admin\ImageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\HomeController::show()": the $imageRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\Admin\\ImageRepository".');
    }
}
