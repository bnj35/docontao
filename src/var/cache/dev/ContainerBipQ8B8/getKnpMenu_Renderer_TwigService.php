<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_Renderer_TwigService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'knp_menu.renderer.twig' shared service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/TwigRenderer.php';

        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['knp_menu.renderer.twig'])) {
            return $container->privates['knp_menu.renderer.twig'];
        }

        return $container->privates['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($a, '@KnpMenu/menu.html.twig', ($container->services['knp_menu.matcher'] ?? $container->getKnpMenu_MatcherService()), []);
    }
}
