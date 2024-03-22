<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_Widget_HttpUrlService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.widget.http_url' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\Widget\HttpUrlListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Widget/HttpUrlListener.php';

        return $container->services['contao.listener.widget.http_url'] = new \Contao\CoreBundle\EventListener\Widget\HttpUrlListener(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
