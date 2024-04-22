<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRootPageDependentModulesControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\FrontendModule\RootPageDependentModulesController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\FrontendModule\RootPageDependentModulesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/AbstractFrontendModuleController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/RootPageDependentModulesController.php';

        $container->services['Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController'] = $instance = new \Contao\CoreBundle\Controller\FrontendModule\RootPageDependentModulesController();

        $instance->setContainer(($container->privates['.service_locator..A7R9no'] ?? $container->load('get_ServiceLocator__A7R9noService'))->withContext('Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController', $container));

        return $instance;
    }
}
