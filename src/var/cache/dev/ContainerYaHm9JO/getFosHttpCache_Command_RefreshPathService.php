<?php

namespace ContainerYaHm9JO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosHttpCache_Command_RefreshPathService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'fos_http_cache.command.refresh_path' shared service.
     *
     * @return \FOS\HttpCacheBundle\Command\RefreshPathCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/http-cache-bundle/src/Command/BaseInvalidateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/http-cache-bundle/src/Command/PathSanityCheck.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/http-cache-bundle/src/Command/RefreshPathCommand.php';

        $container->privates['fos_http_cache.command.refresh_path'] = $instance = new \FOS\HttpCacheBundle\Command\RefreshPathCommand(($container->services['fos_http_cache.cache_manager'] ?? $container->getFosHttpCache_CacheManagerService()));

        $instance->setName('fos:httpcache:refresh:path');

        return $instance;
    }
}
