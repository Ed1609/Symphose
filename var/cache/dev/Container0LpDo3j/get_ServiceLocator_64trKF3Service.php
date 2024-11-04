<?php

namespace Container0LpDo3j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_64trKF3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.64trKF3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.64trKF3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cardRepository' => ['privates', 'App\\Repository\\CardRepository', 'getCardRepositoryService', true],
        ], [
            'cardRepository' => 'App\\Repository\\CardRepository',
        ]);
    }
}
