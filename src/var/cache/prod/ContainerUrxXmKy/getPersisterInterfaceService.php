<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersisterInterfaceService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Scheb\TwoFactorBundle\Model\PersisterInterface' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/PersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/Persister/DoctrinePersister.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/Persister/DoctrinePersisterFactory.php';

        return $container->services['Scheb\\TwoFactorBundle\\Model\\PersisterInterface'] = (new \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersisterFactory(($container->services['doctrine'] ?? $container->load('getDoctrineService')), NULL))->getPersister();
    }
}
