<?php

namespace ContainerPn2MccK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoInstallation_InstallToolUserService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao_installation.install_tool_user' shared service.
     *
     * @return \Contao\InstallationBundle\InstallToolUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/installation-bundle/src/InstallToolUser.php';

        return $container->services['contao_installation.install_tool_user'] = new \Contao\InstallationBundle\InstallToolUser(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
    }
}
