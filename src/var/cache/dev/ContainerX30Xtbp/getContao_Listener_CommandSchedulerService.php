<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_CommandSchedulerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.listener.command_scheduler' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\CommandSchedulerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/CommandSchedulerListener.php';

        $a = ($container->services['contao.cron'] ?? $container->load('getContao_CronService'));

        if (isset($container->privates['contao.listener.command_scheduler'])) {
            return $container->privates['contao.listener.command_scheduler'];
        }
        $b = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao.listener.command_scheduler'])) {
            return $container->privates['contao.listener.command_scheduler'];
        }
        $c = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['contao.listener.command_scheduler'])) {
            return $container->privates['contao.listener.command_scheduler'];
        }

        return $container->privates['contao.listener.command_scheduler'] = new \Contao\CoreBundle\EventListener\CommandSchedulerListener($a, $b, $c, '/_fragment');
    }
}
