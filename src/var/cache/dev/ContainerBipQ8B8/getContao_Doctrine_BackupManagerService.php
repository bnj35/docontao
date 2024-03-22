<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Doctrine_BackupManagerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.doctrine.backup_manager' shared service.
     *
     * @return \Contao\CoreBundle\Doctrine\Backup\BackupManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Doctrine/Backup/BackupManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Doctrine/Backup/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Doctrine/Backup/Dumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/VirtualFilesystemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/VirtualFilesystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Doctrine/Backup/RetentionPolicyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Doctrine/Backup/RetentionPolicy.php';

        return $container->privates['contao.doctrine.backup_manager'] = new \Contao\CoreBundle\Doctrine\Backup\BackupManager(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), new \Contao\CoreBundle\Doctrine\Backup\Dumper(), ($container->privates['contao.filesystem.virtual_factory'] ?? $container->load('getContao_Filesystem_VirtualFactoryService'))->__invoke('backups', false), [0 => 'tl_crawl_queue', 1 => 'tl_log', 2 => 'tl_search', 3 => 'tl_search_index', 4 => 'tl_search_term'], new \Contao\CoreBundle\Doctrine\Backup\RetentionPolicy(5, [0 => '1D', 1 => '7D', 2 => '14D', 3 => '1M']));
    }
}
