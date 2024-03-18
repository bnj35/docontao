<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Contao_Command_BackupCreate_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.contao.command.backup_create.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao.command.backup_create.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('contao:backup:create', [], 'Creates a new database backup.', false, function () use ($container): \Contao\CoreBundle\Command\Backup\BackupCreateCommand {
            return ($container->privates['contao.command.backup_create'] ?? $container->load('getContao_Command_BackupCreateService'));
        });
    }
}
