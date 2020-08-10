<?php

namespace Container3w6vYsr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSampleControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SampleController' shared autowired service.
     *
     * @return \App\Controller\SampleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\SampleController.php';

        $container->services['App\\Controller\\SampleController'] = $instance = new \App\Controller\SampleController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\SampleController', $container));

        return $instance;
    }
}
