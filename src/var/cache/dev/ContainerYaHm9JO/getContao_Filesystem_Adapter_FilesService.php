<?php

namespace ContainerYaHm9JO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Filesystem_Adapter_FilesService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.filesystem.adapter.files' shared service.
     *
     * @return \League\Flysystem\Local\LocalFilesystemAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/ChecksumProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem-local/LocalFilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/UnixVisibility/VisibilityConverter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/UnixVisibility/PortableVisibilityConverter.php';

        return $container->privates['contao.filesystem.adapter.files'] = new \League\Flysystem\Local\LocalFilesystemAdapter((\dirname(__DIR__, 4).'/files'), \League\Flysystem\UnixVisibility\PortableVisibilityConverter::fromArray(['file' => ['public' => 420, 'private' => 384], 'dir' => ['public' => 493, 'private' => 448]], 'private'), 0, 1, NULL, false);
    }
}