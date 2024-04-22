<?php

namespace ContainerYaHm9JO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_AuthenticationProvider_ContaoFrontend_TwoFactorDecoratorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.security.authentication_provider.contao_frontend.two_factor_decorator' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Authentication\Provider\AuthenticationProviderDecorator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Authentication/Provider/AuthenticationProviderDecorator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Authentication/Provider/AuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Authentication/Provider/TwoFactorAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/TwoFactorFirewallConfig.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Http/Utils/RequestDataReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-backup-code/Security/TwoFactor/Backup/BackupCodeManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/TwoFactor/BackupCodeManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/AuthenticationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/AuthenticationContextFactory.php';

        $a = ($container->privates['contao.security.frontend_user_provider'] ?? $container->load('getContao_Security_FrontendUserProviderService'));

        if (isset($container->privates['contao.security.authentication_provider.contao_frontend.two_factor_decorator'])) {
            return $container->privates['contao.security.authentication_provider.contao_frontend.two_factor_decorator'];
        }
        $b = ($container->privates['contao.security.user_checker'] ?? $container->load('getContao_Security_UserCheckerService'));

        if (isset($container->privates['contao.security.authentication_provider.contao_frontend.two_factor_decorator'])) {
            return $container->privates['contao.security.authentication_provider.contao_frontend.two_factor_decorator'];
        }
        $c = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao.security.authentication_provider.contao_frontend.two_factor_decorator'])) {
            return $container->privates['contao.security.authentication_provider.contao_frontend.two_factor_decorator'];
        }
        $d = ($container->services['security.firewall.map'] ?? $container->getSecurity_Firewall_MapService());

        if (isset($container->privates['contao.security.authentication_provider.contao_frontend.two_factor_decorator'])) {
            return $container->privates['contao.security.authentication_provider.contao_frontend.two_factor_decorator'];
        }
        $e = ($container->privates['scheb_two_factor.authentication_context_factory'] ?? ($container->privates['scheb_two_factor.authentication_context_factory'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextFactory('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\AuthenticationContext')));
        $f = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $container->privates['contao.security.authentication_provider.contao_frontend.two_factor_decorator'] = new \Scheb\TwoFactorBundle\Security\Authentication\Provider\AuthenticationProviderDecorator(new \Contao\CoreBundle\Security\Authentication\Provider\AuthenticationProvider($a, $b, 'contao_frontend', ($container->services['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')), $c, new \Scheb\TwoFactorBundle\Security\Authentication\Provider\TwoFactorAuthenticationProvider(new \Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallConfig(['remember_me' => true, 'require_previous_session' => false], 'contao_frontend', ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['scheb_two_factor.security.request_data_reader'] ?? ($container->privates['scheb_two_factor.security.request_data_reader'] = new \Scheb\TwoFactorBundle\Security\Http\Utils\RequestDataReader()))), ($container->privates['scheb_two_factor.provider_registry'] ?? $container->getSchebTwoFactor_ProviderRegistryService()), ($container->services['contao.security.two_factor.backup_code_manager'] ?? ($container->services['contao.security.two_factor.backup_code_manager'] = new \Contao\CoreBundle\Security\TwoFactor\BackupCodeManager())), ($container->privates['scheb_two_factor.provider_preparation_recorder'] ?? $container->getSchebTwoFactor_ProviderPreparationRecorderService())), ($container->privates['scheb_two_factor.authenticated_token_handler'] ?? $container->load('getSchebTwoFactor_AuthenticatedTokenHandlerService')), $e, $f, ($container->services['contao.security.two_factor.trusted_device_manager'] ?? $container->load('getContao_Security_TwoFactor_TrustedDeviceManagerService'))), ($container->privates['scheb_two_factor.condition_handler'] ?? $container->load('getSchebTwoFactor_ConditionHandlerService')), $e, $d, $f);
    }
}