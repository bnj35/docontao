<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ContaoInstallation_Command_Lock_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.contao_installation.command.lock.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao_installation.command.lock.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('contao:install:lock', [], 'Locks the install tool.', false, function () use ($container): \Contao\InstallationBundle\Command\LockCommand {
            return ($container->privates['contao_installation.command.lock'] ?? $container->load('getContaoInstallation_Command_LockService'));
        });
    }
}
