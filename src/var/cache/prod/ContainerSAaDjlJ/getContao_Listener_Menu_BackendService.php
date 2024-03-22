<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_Menu_BackendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.listener.menu.backend' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\Menu\BackendMenuListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Menu/BackendMenuListener.php';

        $a = ($container->services['security.helper'] ?? $container->getSecurity_HelperService());

        if (isset($container->privates['contao.listener.menu.backend'])) {
            return $container->privates['contao.listener.menu.backend'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->privates['contao.listener.menu.backend'])) {
            return $container->privates['contao.listener.menu.backend'];
        }
        $c = ($container->services['translator'] ?? $container->getTranslatorService());

        if (isset($container->privates['contao.listener.menu.backend'])) {
            return $container->privates['contao.listener.menu.backend'];
        }
        $d = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao.listener.menu.backend'])) {
            return $container->privates['contao.listener.menu.backend'];
        }

        return $container->privates['contao.listener.menu.backend'] = new \Contao\CoreBundle\EventListener\Menu\BackendMenuListener($a, $b, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $c, $d);
    }
}
