<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRobotsTxtControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\RobotsTxtController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\RobotsTxtController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/RobotsTxtController.php';

        return $container->services['Contao\\CoreBundle\\Controller\\RobotsTxtController'] = new \Contao\CoreBundle\Controller\RobotsTxtController(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
