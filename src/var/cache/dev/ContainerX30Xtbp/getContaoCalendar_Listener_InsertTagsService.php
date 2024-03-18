<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoCalendar_Listener_InsertTagsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao_calendar.listener.insert_tags' shared service.
     *
     * @return \Contao\CalendarBundle\EventListener\InsertTagsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/EventListener/InsertTagsListener.php';

        return $container->services['contao_calendar.listener.insert_tags'] = new \Contao\CalendarBundle\EventListener\InsertTagsListener(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()));
    }
}
