<?php

namespace ContainerPn2MccK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'mailer' shared service.
     *
     * @return \Contao\CoreBundle\Mailer\ContaoMailer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Mailer/ContaoMailer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/Transports.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport.php';

        return $container->services['mailer'] = new \Contao\CoreBundle\Mailer\ContaoMailer(new \Symfony\Component\Mailer\Mailer((new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () use ($container) {
            yield 0 => $container->load('getMailer_TransportFactory_NullService');
            yield 1 => $container->load('getMailer_TransportFactory_SendmailService');
            yield 2 => $container->load('getMailer_TransportFactory_NativeService');
            yield 3 => $container->load('getMailer_TransportFactory_SmtpService');
        }, 4)))->fromStrings(['main' => $container->getEnv('MAILER_DSN')]), NULL, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService())), ($container->services['contao.mailer.available_transports'] ?? $container->load('getContao_Mailer_AvailableTransportsService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['contao.framework'] ?? $container->getContao_FrameworkService()));
    }
}
