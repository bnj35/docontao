<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Command_FilesyncService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.command.filesync' shared service.
     *
     * @return \Contao\CoreBundle\Command\FilesyncCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Command/FilesyncCommand.php';

        $container->privates['contao.command.filesync'] = $instance = new \Contao\CoreBundle\Command\FilesyncCommand(($container->services['contao.filesystem.dbafs_manager'] ?? $container->load('getContao_Filesystem_DbafsManagerService')));

        $instance->setName('contao:filesync');
        $instance->setDescription('Synchronizes the registered DBAFS with the virtual filesystem.');

        return $instance;
    }
}
