<?php

namespace ContainerYaHm9JO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_DisableAppConfiguredSettingsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.data_container.disable_app_configured_settings' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\DisableAppConfiguredSettingsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/DisableAppConfiguredSettingsListener.php';

        return $container->services['contao.listener.data_container.disable_app_configured_settings'] = new \Contao\CoreBundle\EventListener\DataContainer\DisableAppConfiguredSettingsListener(($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), []);
    }
}
