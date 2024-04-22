<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Command_DebugTwigService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.command.debug_twig' shared service.
     *
     * @return \Contao\CoreBundle\Command\DebugContaoTwigCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Command/DebugContaoTwigCommand.php';

        $container->privates['contao.command.debug_twig'] = $instance = new \Contao\CoreBundle\Command\DebugContaoTwigCommand(($container->services['contao.twig.filesystem_loader'] ?? $container->getContao_Twig_FilesystemLoaderService()), ($container->privates['contao.twig.loader.theme_namespace'] ?? ($container->privates['contao.twig.loader.theme_namespace'] = new \Contao\CoreBundle\Twig\Loader\ThemeNamespace())), \dirname(__DIR__, 4));

        $instance->setName('debug:contao-twig');
        $instance->setDescription('Displays the Contao template hierarchy.');

        return $instance;
    }
}
