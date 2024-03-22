<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_FrontendModule_TwoFactorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.fragment._contao.frontend_module.two_factor' shared service.
     *
     * @return \Contao\CoreBundle\Controller\FrontendModule\TwoFactorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/AbstractFrontendModuleController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/TwoFactorController.php';

        $container->services['contao.fragment._contao.frontend_module.two_factor'] = $instance = new \Contao\CoreBundle\Controller\FrontendModule\TwoFactorController();

        $a = $container->load('get_ServiceLocator_BTVjleE_Contao_Fragment_Contao_FrontendModule_TwoFactorService');

        $instance->setContainer($a);
        $instance->setFragmentOptions(['category' => 'user', 'type' => 'two_factor', 'debugController' => 'Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController', 'template' => 'mod_two_factor']);
        $instance->setContainer($a);

        return $instance;
    }
}
