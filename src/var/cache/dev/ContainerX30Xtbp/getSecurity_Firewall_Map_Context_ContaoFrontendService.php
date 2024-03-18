<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_ContaoFrontendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.contao_frontend' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($container->privates['security.event_dispatcher.contao_frontend'] ?? $container->load('getSecurity_EventDispatcher_ContaoFrontendService'));

        if (isset($container->privates['security.firewall.map.context.contao_frontend'])) {
            return $container->privates['security.firewall.map.context.contao_frontend'];
        }
        $b = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());
        $c = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        return $container->privates['security.firewall.map.context.contao_frontend'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.1'] ?? $container->load('getSecurity_ContextListener_1Service'));
            yield 2 => ($container->privates['contao.security.login_authentication_listener.contao_frontend'] ?? $container->load('getContao_Security_LoginAuthenticationListener_ContaoFrontendService'));
            yield 3 => ($container->privates['security.authentication.listener.rememberme.contao_frontend'] ?? $container->load('getSecurity_Authentication_Listener_Rememberme_ContaoFrontendService'));
            yield 4 => ($container->privates['security.authentication.listener.anonymous.contao_frontend'] ?? $container->load('getSecurity_Authentication_Listener_Anonymous_ContaoFrontendService'));
            yield 5 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, ($container->services['security.authentication.trust_resolver'] ?? $container->getSecurity_Authentication_TrustResolverService()), $c, 'contao_frontend', ($container->privates['contao.security.authentication_entry_point'] ?? $container->load('getContao_Security_AuthenticationEntryPointService')), NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $c, $a, ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'contao_frontend_logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('contao_frontend', 'contao.security.user_checker', 'contao.routing.frontend_matcher', true, false, 'contao.security.frontend_user_provider', 'contao_frontend', 'contao.security.authentication_entry_point', NULL, NULL, [0 => 'contao_login', 1 => 'remember_me', 2 => 'anonymous'], NULL));
    }
}
