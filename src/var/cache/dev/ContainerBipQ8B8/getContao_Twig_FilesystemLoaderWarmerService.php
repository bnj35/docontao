<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Twig_FilesystemLoaderWarmerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.twig.filesystem_loader_warmer' shared service.
     *
     * @return \Contao\CoreBundle\Twig\Loader\ContaoFilesystemLoaderWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Twig/Loader/ContaoFilesystemLoaderWarmer.php';

        return $container->privates['contao.twig.filesystem_loader_warmer'] = new \Contao\CoreBundle\Twig\Loader\ContaoFilesystemLoaderWarmer(($container->services['contao.twig.filesystem_loader'] ?? $container->getContao_Twig_FilesystemLoaderService()), $container->targetDir.'', 'dev');
    }
}
