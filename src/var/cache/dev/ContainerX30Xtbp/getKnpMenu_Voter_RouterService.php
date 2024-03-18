<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_Voter_RouterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'knp_menu.voter.router' shared service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/Voter/RouteVoter.php';

        return $container->privates['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
