<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6j_FXf6Service extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6j.fXf6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6j.fXf6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'model' => ['privates', '.errored..service_locator.6j.fXf6.Contao\\ModuleModel', NULL, 'Cannot autowire service ".service_locator.6j.fXf6": it references class "Contao\\ModuleModel" but no such service exists.'],
        ], [
            'model' => 'Contao\\ModuleModel',
        ]);
    }
}
