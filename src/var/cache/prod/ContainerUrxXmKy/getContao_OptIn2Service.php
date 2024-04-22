<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_OptIn2Service extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.opt_in' shared service.
     *
     * @return \Contao\CoreBundle\OptIn\OptIn
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/OptIn/OptInInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/OptIn/OptIn.php';

        return $container->services['contao.opt_in'] = new \Contao\CoreBundle\OptIn\OptIn(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()));
    }
}
