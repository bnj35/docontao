<?php

namespace ContainerYaHm9JO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_PreviewUrlConvertService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.listener.preview_url_convert' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\PreviewUrlConvertListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/PreviewUrlConvertListener.php';

        $a = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao.listener.preview_url_convert'])) {
            return $container->privates['contao.listener.preview_url_convert'];
        }
        $b = ($container->services['contao.routing.page_registry'] ?? $container->getContao_Routing_PageRegistryService());

        if (isset($container->privates['contao.listener.preview_url_convert'])) {
            return $container->privates['contao.listener.preview_url_convert'];
        }

        return $container->privates['contao.listener.preview_url_convert'] = new \Contao\CoreBundle\EventListener\PreviewUrlConvertListener($a, $b, ($container->services['uri_signer'] ?? ($container->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('APP_SECRET')))), '/_fragment');
    }
}
