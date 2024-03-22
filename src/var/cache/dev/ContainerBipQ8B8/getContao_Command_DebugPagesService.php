<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Command_DebugPagesService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.command.debug_pages' shared service.
     *
     * @return \Contao\CoreBundle\Command\DebugPagesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Command/DebugPagesCommand.php';

        $container->privates['contao.command.debug_pages'] = $instance = new \Contao\CoreBundle\Command\DebugPagesCommand(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), ($container->services['contao.routing.page_registry'] ?? $container->getContao_Routing_PageRegistryService()));

        $a = ($container->services['Contao\\CoreBundle\\Controller\\Page\\ErrorPageController'] ?? $container->getErrorPageControllerService());

        $instance->add('error_401', new \Contao\CoreBundle\Routing\Page\RouteConfig(false, NULL, NULL, [], [], ['_controller' => 'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController'], []), NULL, $a);
        $instance->add('error_403', new \Contao\CoreBundle\Routing\Page\RouteConfig(false, NULL, NULL, [], [], ['_controller' => 'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController'], []), NULL, $a);
        $instance->add('error_404', new \Contao\CoreBundle\Routing\Page\RouteConfig(false, NULL, NULL, [], [], ['_controller' => 'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController'], []), NULL, $a);
        $instance->add('error_503', new \Contao\CoreBundle\Routing\Page\RouteConfig(false, NULL, NULL, [], [], ['_controller' => 'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController'], []), NULL, $a);
        $instance->add('root', new \Contao\CoreBundle\Routing\Page\RouteConfig(NULL, NULL, NULL, [], [], ['_controller' => 'Contao\\CoreBundle\\Controller\\Page\\RootPageController'], []), NULL, false);
        $instance->setName('debug:pages');
        $instance->setDescription('Displays the page controller configuration.');

        return $instance;
    }
}
