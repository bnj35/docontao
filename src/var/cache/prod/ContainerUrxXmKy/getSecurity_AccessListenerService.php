<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessListenerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AccessListener.php';

        $a = ($container->privates['contao.security.access_decision_manager'] ?? $container->getContao_Security_AccessDecisionManagerService());

        if (isset($container->privates['security.access_listener'])) {
            return $container->privates['security.access_listener'];
        }
        $b = ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService'));

        if (isset($container->privates['security.access_listener'])) {
            return $container->privates['security.access_listener'];
        }

        return $container->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), $a, ($container->privates['security.access_map'] ?? $container->load('getSecurity_AccessMapService')), $b);
    }
}
