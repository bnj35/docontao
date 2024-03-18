<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ContextListener_0Service extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ContextListener.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['security.context_listener.0'])) {
            return $container->privates['security.context_listener.0'];
        }

        return $container->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($container->privates['security.untracked_token_storage'] ?? ($container->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['contao.security.backend_user_provider'] ?? $container->load('getContao_Security_BackendUserProviderService'));
            yield 1 => ($container->privates['contao.security.frontend_user_provider'] ?? $container->load('getContao_Security_FrontendUserProviderService'));
        }, 2), 'contao_backend', ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), $a, ($container->services['security.authentication.trust_resolver'] ?? $container->getSecurity_Authentication_TrustResolverService()), [0 => ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), 1 => 'enableUsageTracking']);
    }
}
