<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoCalendar_Listener_PreviewUrlConvertService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao_calendar.listener.preview_url_convert' shared service.
     *
     * @return \Contao\CalendarBundle\EventListener\PreviewUrlConvertListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/EventListener/PreviewUrlConvertListener.php';

        $a = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao_calendar.listener.preview_url_convert'])) {
            return $container->privates['contao_calendar.listener.preview_url_convert'];
        }

        return $container->privates['contao_calendar.listener.preview_url_convert'] = new \Contao\CalendarBundle\EventListener\PreviewUrlConvertListener($a);
    }
}
