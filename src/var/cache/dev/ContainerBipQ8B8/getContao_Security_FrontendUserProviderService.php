<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_FrontendUserProviderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.security.frontend_user_provider' shared service.
     *
     * @return \Contao\CoreBundle\Security\User\ContaoUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/User/ContaoUserProvider.php';

        $a = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao.security.frontend_user_provider'])) {
            return $container->privates['contao.security.frontend_user_provider'];
        }

        return $container->privates['contao.security.frontend_user_provider'] = new \Contao\CoreBundle\Security\User\ContaoUserProvider($a, ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), 'Contao\\FrontendUser', ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
