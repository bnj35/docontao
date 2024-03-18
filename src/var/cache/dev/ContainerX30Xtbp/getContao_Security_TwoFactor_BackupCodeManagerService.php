<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_TwoFactor_BackupCodeManagerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.security.two_factor.backup_code_manager' shared service.
     *
     * @return \Contao\CoreBundle\Security\TwoFactor\BackupCodeManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-backup-code/Security/TwoFactor/Backup/BackupCodeManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/TwoFactor/BackupCodeManager.php';

        return $container->services['contao.security.two_factor.backup_code_manager'] = new \Contao\CoreBundle\Security\TwoFactor\BackupCodeManager();
    }
}
