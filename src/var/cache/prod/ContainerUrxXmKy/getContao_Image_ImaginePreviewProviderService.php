<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Image_ImaginePreviewProviderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.image.imagine_preview_provider' shared service.
     *
     * @return \Contao\CoreBundle\Image\Preview\ImaginePreviewProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/Preview/PreviewProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/Preview/ImaginePreviewProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Factory/ClassFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/ImagineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/AbstractImagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Driver/InfoProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Gd/Imagine.php';

        return $container->privates['contao.image.imagine_preview_provider'] = new \Contao\CoreBundle\Image\Preview\ImaginePreviewProvider(($container->services['contao.image.imagine'] ?? ($container->services['contao.image.imagine'] = new \Imagine\Gd\Imagine())));
    }
}
