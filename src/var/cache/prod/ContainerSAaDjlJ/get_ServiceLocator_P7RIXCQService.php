<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P7RIXCQService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.service_locator.P7RIXCQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P7RIXCQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'model' => ['privates', '.errored..service_locator.P7RIXCQ.Contao\\ContentModel', NULL, 'Cannot autowire service ".service_locator.P7RIXCQ": it references class "Contao\\ContentModel" but no such service exists.'],
        ], [
            'model' => 'Contao\\ContentModel',
        ]);
    }
}
