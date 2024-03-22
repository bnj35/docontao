<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoInstallation_Listener_InitializeApplicationService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_installation.listener.initialize_application' shared service.
     *
     * @return \Contao\InstallationBundle\EventListener\InitializeApplicationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/installation-bundle/src/EventListener/InitializeApplicationListener.php';

        $container->privates['contao_installation.listener.initialize_application'] = $instance = new \Contao\InstallationBundle\EventListener\InitializeApplicationListener();

        $instance->setContainer($container);

        return $instance;
    }
}