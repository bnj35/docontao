<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Rememberme_Services_Simplehash_ContaoFrontend_TwoFactorDecoratorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.authentication.rememberme.services.simplehash.contao_frontend.two_factor_decorator' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Authentication\RememberMe\RememberMeServicesDecorator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/RememberMeServicesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Authentication/RememberMe/RememberMeServicesDecorator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/AbstractRememberMeServices.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Authentication/RememberMe/ExpiringTokenBasedRememberMeServices.php';

        return $container->privates['security.authentication.rememberme.services.simplehash.contao_frontend.two_factor_decorator'] = new \Scheb\TwoFactorBundle\Security\Authentication\RememberMe\RememberMeServicesDecorator(new \Contao\CoreBundle\Security\Authentication\RememberMe\ExpiringTokenBasedRememberMeServices(($container->services['contao.repository.remember_me'] ?? $container->load('getContao_Repository_RememberMeService')), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['contao.security.frontend_user_provider'] ?? $container->load('getContao_Security_FrontendUserProviderService'));
        }, 1), $container->getEnv('APP_SECRET'), 'contao_frontend', ['remember_me_parameter' => 'autologin', 'name' => 'REMEMBERME', 'lifetime' => 31536000, 'path' => '/', 'domain' => NULL, 'secure' => NULL, 'httponly' => true, 'samesite' => 'lax', 'always_remember_me' => false], ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService'))));
    }
}
