<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_Security_LogoutSuccessService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.listener.security.logout_success' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\Security\LogoutSuccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Security/LogoutSuccessListener.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['contao.listener.security.logout_success'])) {
            return $container->privates['contao.listener.security.logout_success'];
        }
        $b = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao.listener.security.logout_success'])) {
            return $container->privates['contao.listener.security.logout_success'];
        }
        $c = ($container->services['security.helper'] ?? $container->getSecurity_HelperService());

        if (isset($container->privates['contao.listener.security.logout_success'])) {
            return $container->privates['contao.listener.security.logout_success'];
        }

        return $container->privates['contao.listener.security.logout_success'] = new \Contao\CoreBundle\EventListener\Security\LogoutSuccessListener($a, ($container->services['contao.routing.scope_matcher'] ?? $container->getContao_Routing_ScopeMatcherService()), $b, $c, ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
