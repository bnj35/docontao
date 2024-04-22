<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_TwoFactor_TrustedDeviceManagerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.security.two_factor.trusted_device_manager' shared service.
     *
     * @return \Contao\CoreBundle\Security\TwoFactor\TrustedDeviceManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-trusted-device/Security/TwoFactor/Trusted/TrustedDeviceManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/TwoFactor/TrustedDeviceManager.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));

        if (isset($container->services['contao.security.two_factor.trusted_device_manager'])) {
            return $container->services['contao.security.two_factor.trusted_device_manager'];
        }

        return $container->services['contao.security.two_factor.trusted_device_manager'] = new \Contao\CoreBundle\Security\TwoFactor\TrustedDeviceManager(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['scheb_two_factor.trusted_token_storage'] ?? $container->getSchebTwoFactor_TrustedTokenStorageService()), $a);
    }
}
