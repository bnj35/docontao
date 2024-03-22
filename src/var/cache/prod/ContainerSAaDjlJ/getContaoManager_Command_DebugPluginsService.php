<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoManager_Command_DebugPluginsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_manager.command.debug_plugins' shared service.
     *
     * @return \Contao\ManagerBundle\Command\DebugPluginsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/manager-bundle/src/Command/DebugPluginsCommand.php';

        $container->privates['contao_manager.command.debug_plugins'] = $instance = new \Contao\ManagerBundle\Command\DebugPluginsCommand(($container->services['kernel'] ?? $container->get('kernel', 1)));

        $instance->setName('debug:plugins');
        $instance->setDescription('Displays the Contao Manager plugin configurations.');

        return $instance;
    }
}
