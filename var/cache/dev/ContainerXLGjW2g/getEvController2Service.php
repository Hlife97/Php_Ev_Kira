<?php

namespace ContainerXLGjW2g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EvController' shared autowired service.
     *
     * @return \App\Controller\EvController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\EvController.php';

        $container->services['App\\Controller\\EvController'] = $instance = new \App\Controller\EvController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\EvController', $container));

        return $instance;
    }
}
