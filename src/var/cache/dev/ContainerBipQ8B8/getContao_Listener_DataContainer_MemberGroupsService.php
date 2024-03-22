<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_MemberGroupsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.data_container.member_groups' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\MemberGroupsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/MemberGroupsListener.php';

        return $container->services['contao.listener.data_container.member_groups'] = new \Contao\CoreBundle\EventListener\DataContainer\MemberGroupsListener(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
