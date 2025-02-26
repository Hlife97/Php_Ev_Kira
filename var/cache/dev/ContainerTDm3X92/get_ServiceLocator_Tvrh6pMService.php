<?php

namespace ContainerTDm3X92;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Tvrh6pMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tvrh6pM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tvrh6pM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'user' => ['privates', '.errored..service_locator.tvrh6pM.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.tvrh6pM": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'passwordEncoder' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
