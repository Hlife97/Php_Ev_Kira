<?php

namespace ContainerXLGjW2g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XTxoajcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XTxoajc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XTxoajc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservationRepository' => ['privates', 'App\\Repository\\Admin\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'reservationRepository' => 'App\\Repository\\Admin\\ReservationRepository',
        ]);
    }
}
