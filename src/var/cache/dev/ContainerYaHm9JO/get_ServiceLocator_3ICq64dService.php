<?php

namespace ContainerYaHm9JO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3ICq64dService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3ICq64d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3ICq64d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.contao_backend' => ['privates', 'security.event_dispatcher.contao_backend', 'getSecurity_EventDispatcher_ContaoBackendService', true],
            'security.event_dispatcher.contao_frontend' => ['privates', 'security.event_dispatcher.contao_frontend', 'getSecurity_EventDispatcher_ContaoFrontendService', true],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.contao_backend' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.contao_frontend' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}