<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_AuthenticationFailureHandlerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.security.authentication_failure_handler' shared service.
     *
     * @return \Contao\CoreBundle\Security\Authentication\AuthenticationFailureHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Authentication/AuthenticationFailureHandler.php';

        return $container->privates['contao.security.authentication_failure_handler'] = new \Contao\CoreBundle\Security\Authentication\AuthenticationFailureHandler(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
