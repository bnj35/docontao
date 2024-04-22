<?php

namespace ContainerYaHm9JO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Cache_ClearerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.cache.clearer' shared service.
     *
     * @return \Contao\CoreBundle\Cache\ContaoCacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cache/ContaoCacheClearer.php';

        return $container->services['contao.cache.clearer'] = new \Contao\CoreBundle\Cache\ContaoCacheClearer(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));
    }
}