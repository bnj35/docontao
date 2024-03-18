<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_InsertTags_AssetService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.insert_tags.asset' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\InsertTags\AssetListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/InsertTags/AssetListener.php';

        return $container->services['contao.listener.insert_tags.asset'] = new \Contao\CoreBundle\EventListener\InsertTags\AssetListener(($container->services['assets.packages'] ?? $container->getAssets_PackagesService()));
    }
}
