<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Slug_ValidCharactersService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.slug.valid_characters' shared service.
     *
     * @return \Contao\CoreBundle\Slug\ValidCharacters
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Slug/ValidCharacters.php';

        return $container->services['contao.slug.valid_characters'] = new \Contao\CoreBundle\Slug\ValidCharacters(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
