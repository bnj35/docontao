<?php

namespace ContainerYaHm9JO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Routing_UrlGeneratorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.routing.url_generator' shared service.
     *
     * @return \Contao\CoreBundle\Routing\UrlGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Routing/UrlGenerator.php';

        return $container->services['contao.routing.url_generator'] = new \Contao\CoreBundle\Routing\UrlGenerator(($container->services['router'] ?? $container->getRouterService()), ($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), false);
    }
}
