<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebugControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\ManagerBundle\Controller\DebugController' shared service.
     *
     * @return \Contao\ManagerBundle\Controller\DebugController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/manager-bundle/src/Controller/DebugController.php';

        return $container->services['Contao\\ManagerBundle\\Controller\\DebugController'] = new \Contao\ManagerBundle\Controller\DebugController(($container->services['security.helper'] ?? $container->getSecurity_HelperService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['contao_manager.jwt_manager'] ?? $container->get('contao_manager.jwt_manager', 1)));
    }
}
