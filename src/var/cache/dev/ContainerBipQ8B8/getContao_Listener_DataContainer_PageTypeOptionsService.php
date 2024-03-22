<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_PageTypeOptionsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.data_container.page_type_options' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\PageTypeOptionsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/PageTypeOptionsListener.php';

        return $container->services['contao.listener.data_container.page_type_options'] = new \Contao\CoreBundle\EventListener\DataContainer\PageTypeOptionsListener(($container->services['contao.routing.page_registry'] ?? $container->getContao_Routing_PageRegistryService()), ($container->services['security.helper'] ?? $container->getSecurity_HelperService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
