<?php

namespace Container8jYVGMg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CnYEmTxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cnYEmTx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cnYEmTx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'imageRepository' => ['privates', 'App\\Repository\\ImageRepository', 'getImageRepositoryService', true],
        ], [
            'imageRepository' => 'App\\Repository\\ImageRepository',
        ]);
    }
}
