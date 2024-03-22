<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Image_StudioService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.image.studio' shared service.
     *
     * @return \Contao\CoreBundle\Image\Studio\Studio
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/Studio/Studio.php';

        return $container->services['contao.image.studio'] = new \Contao\CoreBundle\Image\Studio\Studio(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contao.assets.files_context' => ['services', 'contao.assets.files_context', 'getContao_Assets_FilesContextService', true],
            'contao.framework' => ['services', 'contao.framework', 'getContao_FrameworkService', false],
            'contao.image.factory' => ['services', 'contao.image.factory', 'getContao_Image_FactoryService', true],
            'contao.image.legacy_resizer' => ['services', 'contao.image.legacy_resizer', 'getContao_Image_LegacyResizerService', true],
            'contao.image.picture_factory' => ['services', 'contao.image.picture_factory', 'getContao_Image_PictureFactoryService', true],
            'contao.image.studio' => ['services', 'contao.image.studio', 'getContao_Image_StudioService', true],
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'contao.assets.files_context' => '?',
            'contao.framework' => '?',
            'contao.image.factory' => '?',
            'contao.image.legacy_resizer' => '?',
            'contao.image.picture_factory' => '?',
            'contao.image.studio' => '?',
            'event_dispatcher' => '?',
        ]), \dirname(__DIR__, 4), 'files', (\dirname(__DIR__, 4).'/public'), $container->parameters['contao.image.valid_extensions']);
    }
}
