<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BTVjleE_Contao_Fragment_Contao_FrontendModule_TwoFactorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.service_locator.bTVjleE.contao.fragment._contao.frontend_module.two_factor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return ($container->privates['.service_locator.bTVjleE'] ?? $container->load('get_ServiceLocator_BTVjleEService'))->withContext('contao.fragment._contao.frontend_module.two_factor', $container);
    }
}