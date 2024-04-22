<?php

namespace ContainerYaHm9JO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_Listener_TrustedDeviceService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.security.listener.trusted_device' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\EventListener\TrustedDeviceListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-trusted-device/Security/Http/EventListener/TrustedDeviceListener.php';

        return $container->privates['scheb_two_factor.security.listener.trusted_device'] = new \Scheb\TwoFactorBundle\Security\Http\EventListener\TrustedDeviceListener(($container->privates['scheb_two_factor.default_trusted_device_manager'] ?? $container->load('getSchebTwoFactor_DefaultTrustedDeviceManagerService')));
    }
}
