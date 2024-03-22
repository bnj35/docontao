<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Twig_Interop_ContextFactoryService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.twig.interop.context_factory' shared service.
     *
     * @return \Contao\CoreBundle\Twig\Interop\ContextFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Twig/Interop/ContextFactory.php';

        return $container->services['contao.twig.interop.context_factory'] = new \Contao\CoreBundle\Twig\Interop\ContextFactory();
    }
}
