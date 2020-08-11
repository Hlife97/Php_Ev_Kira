<?php

namespace ContainerBDniSyE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3p6kP69Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3p6kP69' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3p6kP69'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'settingRepository' => ['privates', 'App\\Repository\\SettingRepository', 'getSettingRepositoryService', true],
        ], [
            'settingRepository' => 'App\\Repository\\SettingRepository',
        ]);
    }
}
