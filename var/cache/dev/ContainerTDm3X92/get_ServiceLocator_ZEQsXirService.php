<?php

namespace ContainerTDm3X92;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZEQsXirService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zEQsXir' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zEQsXir'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentRepository' => ['privates', 'App\\Repository\\Admin\\CommentRepository', 'getCommentRepositoryService', true],
        ], [
            'commentRepository' => 'App\\Repository\\Admin\\CommentRepository',
        ]);
    }
}
