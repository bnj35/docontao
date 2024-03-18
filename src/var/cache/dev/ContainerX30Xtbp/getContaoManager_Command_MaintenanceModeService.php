<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoManager_Command_MaintenanceModeService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao_manager.command.maintenance_mode' shared service.
     *
     * @return \Contao\ManagerBundle\Command\MaintenanceModeCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/manager-bundle/src/Command/MaintenanceModeCommand.php';

        $container->privates['contao_manager.command.maintenance_mode'] = $instance = new \Contao\ManagerBundle\Command\MaintenanceModeCommand((\dirname(__DIR__, 3).'/maintenance.html'), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));

        $instance->setName('contao:maintenance-mode');
        $instance->setDescription('Changes the state of the system maintenance mode.');

        return $instance;
    }
}
