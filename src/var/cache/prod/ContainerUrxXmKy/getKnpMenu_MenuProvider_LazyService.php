<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_MenuProvider_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'knp_menu.menu_provider.lazy' shared service.
     *
     * @return \Knp\Menu\Provider\LazyProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/LazyProvider.php';

        return $container->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(['be_menu' => [0 => function () use ($container) {
            return ($container->services['contao.menu.backend_builder'] ?? $container->load('getContao_Menu_BackendBuilderService'));
        }, 1 => 'buildMainMenu'], 'be_header_menu' => [0 => function () use ($container) {
            return ($container->services['contao.menu.backend_builder'] ?? $container->load('getContao_Menu_BackendBuilderService'));
        }, 1 => 'buildHeaderMenu']]);
    }
}
