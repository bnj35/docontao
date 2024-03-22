<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_ContentCompositionService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.data_container.content_composition' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\ContentCompositionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/ContentCompositionListener.php';

        return $container->services['contao.listener.data_container.content_composition'] = new \Contao\CoreBundle\EventListener\DataContainer\ContentCompositionListener(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), ($container->services['security.helper'] ?? $container->getSecurity_HelperService()), ($container->services['contao.routing.page_registry'] ?? $container->getContao_Routing_PageRegistryService()), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
