<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Access_ExpressionVoterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchy.php';

        $a = ($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService());

        if (isset($container->privates['security.access.expression_voter'])) {
            return $container->privates['security.access.expression_voter'];
        }

        return $container->privates['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($container->privates['cache.security_expression_language'] ?? $container->load('getCache_SecurityExpressionLanguageService'))), ($container->services['security.authentication.trust_resolver'] ?? $container->getSecurity_Authentication_TrustResolverService()), $a, new \Symfony\Component\Security\Core\Role\RoleHierarchy([]));
    }
}
