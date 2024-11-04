<?php

namespace Container0LpDo3j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dj_NNeV.App\Controller\UserController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dj_NNeV.App\\Controller\\UserController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cardRepository' => ['privates', 'App\\Repository\\CardRepository', 'getCardRepositoryService', true],
            'livraisonRepository' => ['privates', 'App\\Repository\\LivraisonRepository', 'getLivraisonRepositoryService', true],
            'walletRepository' => ['privates', 'App\\Repository\\WalletRepository', 'getWalletRepositoryService', true],
        ], [
            'cardRepository' => 'App\\Repository\\CardRepository',
            'livraisonRepository' => 'App\\Repository\\LivraisonRepository',
            'walletRepository' => 'App\\Repository\\WalletRepository',
        ]))->withContext('App\\Controller\\UserController::index()', $container);
    }
}
