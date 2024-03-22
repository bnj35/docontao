<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosHttpCache_EventListener_LogService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'fos_http_cache.event_listener.log' shared service.
     *
     * @return \FOS\HttpCache\EventListener\LogListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/http-cache/src/EventListener/LogListener.php';

        return $container->privates['fos_http_cache.event_listener.log'] = new \FOS\HttpCache\EventListener\LogListener(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
