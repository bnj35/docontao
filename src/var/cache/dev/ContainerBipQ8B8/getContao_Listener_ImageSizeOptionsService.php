<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_ImageSizeOptionsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.image_size_options' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\ImageSizeOptionsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/ImageSizeOptionsListener.php';

        return $container->services['contao.listener.image_size_options'] = new \Contao\CoreBundle\EventListener\ImageSizeOptionsListener(($container->services['security.helper'] ?? $container->getSecurity_HelperService()), ($container->services['contao.image.sizes'] ?? $container->load('getContao_Image_SizesService')));
    }
}
