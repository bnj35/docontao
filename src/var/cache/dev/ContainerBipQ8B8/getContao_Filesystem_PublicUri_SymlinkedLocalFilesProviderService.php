<?php

namespace ContainerBipQ8B8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Filesystem_PublicUri_SymlinkedLocalFilesProviderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.filesystem.public_uri.symlinked_local_files_provider' shared service.
     *
     * @return \Contao\CoreBundle\Filesystem\PublicUri\SymlinkedLocalFilesProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/PublicUri/PublicUriProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/PublicUri/SymlinkedLocalFilesProvider.php';

        return $container->privates['contao.filesystem.public_uri.symlinked_local_files_provider'] = new \Contao\CoreBundle\Filesystem\PublicUri\SymlinkedLocalFilesProvider(($container->privates['contao.filesystem.adapter.files'] ?? $container->load('getContao_Filesystem_Adapter_FilesService')), 'files', ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
