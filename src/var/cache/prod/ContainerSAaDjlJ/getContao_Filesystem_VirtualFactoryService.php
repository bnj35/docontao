<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Filesystem_VirtualFactoryService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.filesystem.virtual_factory' shared service.
     *
     * @return \Contao\CoreBundle\Filesystem\VirtualFilesystemFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/VirtualFilesystemFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/MountManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/ChecksumProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem-local/LocalFilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/UnixVisibility/VisibilityConverter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/UnixVisibility/PortableVisibilityConverter.php';

        $a = ($container->services['contao.filesystem.dbafs_manager'] ?? $container->load('getContao_Filesystem_DbafsManagerService'));

        if (isset($container->privates['contao.filesystem.virtual_factory'])) {
            return $container->privates['contao.filesystem.virtual_factory'];
        }
        $b = new \Contao\CoreBundle\Filesystem\MountManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['contao.filesystem.public_uri.symlinked_local_files_provider'] ?? $container->load('getContao_Filesystem_PublicUri_SymlinkedLocalFilesProviderService'));
        }, 1));
        $b->mount(($container->privates['contao.filesystem.adapter.files'] ?? $container->load('getContao_Filesystem_Adapter_FilesService')), 'files');
        $b->mount(new \League\Flysystem\Local\LocalFilesystemAdapter((\dirname(__DIR__, 3).'/backups'), \League\Flysystem\UnixVisibility\PortableVisibilityConverter::fromArray(['file' => ['public' => 420, 'private' => 384], 'dir' => ['public' => 493, 'private' => 448]], 'private'), 0, 1, NULL, false), 'backups');

        return $container->privates['contao.filesystem.virtual_factory'] = new \Contao\CoreBundle\Filesystem\VirtualFilesystemFactory($b, $a);
    }
}
