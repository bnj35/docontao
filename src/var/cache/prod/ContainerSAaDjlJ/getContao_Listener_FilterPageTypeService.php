<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_FilterPageTypeService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.listener.filter_page_type' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\FilterPageTypeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/FilterPageTypeListener.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['contao.listener.filter_page_type'])) {
            return $container->privates['contao.listener.filter_page_type'];
        }

        return $container->privates['contao.listener.filter_page_type'] = new \Contao\CoreBundle\EventListener\FilterPageTypeListener($a);
    }
}
