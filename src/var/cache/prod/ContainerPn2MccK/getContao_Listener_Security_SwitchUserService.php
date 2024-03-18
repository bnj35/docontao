<?php

namespace ContainerPn2MccK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_Security_SwitchUserService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.listener.security.switch_user' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\Security\SwitchUserListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Security/SwitchUserListener.php';

        return $container->privates['contao.listener.security.switch_user'] = new \Contao\CoreBundle\EventListener\Security\SwitchUserListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->services['monolog.logger.contao.access'] ?? $container->load('getMonolog_Logger_Contao_AccessService')));
    }
}
