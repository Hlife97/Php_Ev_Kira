<?php

namespace Container8jYVGMg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V7vxJV1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v7vxJV1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v7vxJV1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentRepository' => ['privates', 'App\\Repository\\Admin\\CommentRepository', 'getCommentRepositoryService', true],
            'ev' => ['privates', '.errored..service_locator.v7vxJV1.App\\Entity\\Ev', NULL, 'Cannot autowire service ".service_locator.v7vxJV1": it references class "App\\Entity\\Ev" but no such service exists.'],
            'imageRepository' => ['privates', 'App\\Repository\\ImageRepository', 'getImageRepositoryService', true],
        ], [
            'commentRepository' => 'App\\Repository\\Admin\\CommentRepository',
            'ev' => 'App\\Entity\\Ev',
            'imageRepository' => 'App\\Repository\\ImageRepository',
        ]);
    }
}