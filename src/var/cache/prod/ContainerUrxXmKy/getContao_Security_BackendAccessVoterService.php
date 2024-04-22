<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_BackendAccessVoterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.security.backend_access_voter' shared service.
     *
     * @return \Contao\CoreBundle\Security\Voter\BackendAccessVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/Voter.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/BackendAccessVoter.php';

        $a = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['contao.security.backend_access_voter'])) {
            return $container->privates['contao.security.backend_access_voter'];
        }

        return $container->privates['contao.security.backend_access_voter'] = new \Contao\CoreBundle\Security\Voter\BackendAccessVoter($a);
    }
}
