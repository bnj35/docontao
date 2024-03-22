<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Contao_Command_UserPassword_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.contao.command.user_password.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao.command.user_password.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('contao:user:password', [], 'Changes the password of a Contao back end user.', false, function () use ($container): \Contao\CoreBundle\Command\UserPasswordCommand {
            return ($container->privates['contao.command.user_password'] ?? $container->load('getContao_Command_UserPasswordService'));
        });
    }
}
