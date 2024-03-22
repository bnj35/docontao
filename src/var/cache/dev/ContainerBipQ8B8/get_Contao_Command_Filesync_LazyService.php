<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Contao_Command_Filesync_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.contao.command.filesync.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao.command.filesync.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('contao:filesync', [], 'Synchronizes the registered DBAFS with the virtual filesystem.', false, function () use ($container): \Contao\CoreBundle\Command\FilesyncCommand {
            return ($container->privates['contao.command.filesync'] ?? $container->load('getContao_Command_FilesyncService'));
        });
    }
}
