<?php

namespace Container8jYVGMg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessagesTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Admin\MessagesType' shared autowired service.
     *
     * @return \App\Form\Admin\MessagesType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\Admin\\MessagesType.php';

        return $container->privates['App\\Form\\Admin\\MessagesType'] = new \App\Form\Admin\MessagesType();
    }
}
