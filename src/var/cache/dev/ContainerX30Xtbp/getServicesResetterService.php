<?php

namespace ContainerX30Xtbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
            if (isset($container->privates['doctrine.debug_data_holder'])) {
                yield 'doctrine.debug_data_holder' => ($container->privates['doctrine.debug_data_holder'] ?? null);
            }
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (isset($container->privates['cache.validator'])) {
                yield 'cache.validator' => ($container->privates['cache.validator'] ?? null);
            }
            if (isset($container->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($container->privates['cache.serializer'] ?? null);
            }
            if (isset($container->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? null);
            }
            if (isset($container->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($container->privates['cache.property_info'] ?? null);
            }
            if (isset($container->privates['.debug.http_client'])) {
                yield 'http_client' => ($container->privates['.debug.http_client'] ?? null);
            }
            if (isset($container->privates['mailer.message_logger_listener'])) {
                yield 'mailer.message_logger_listener' => ($container->privates['mailer.message_logger_listener'] ?? null);
            }
            if (isset($container->services['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($container->services['debug.stopwatch'] ?? null);
            }
            if (isset($container->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($container->services['event_dispatcher'] ?? null);
            }
            if (isset($container->privates['doctrine.result_cache_pool'])) {
                yield 'doctrine.result_cache_pool' => ($container->privates['doctrine.result_cache_pool'] ?? null);
            }
            if (isset($container->privates['doctrine.system_cache_pool'])) {
                yield 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool'] ?? null);
            }
            if (isset($container->privates['session_listener'])) {
                yield 'session_listener' => ($container->privates['session_listener'] ?? null);
            }
            if (isset($container->services['.container.private.profiler'])) {
                yield 'profiler' => ($container->services['.container.private.profiler'] ?? null);
            }
            if (isset($container->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($container->privates['monolog.handler.main'] ?? null);
            }
            if (isset($container->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($container->privates['monolog.handler.console'] ?? null);
            }
            if (isset($container->privates['monolog.handler.console_very_verbose'])) {
                yield 'monolog.handler.console_very_verbose' => ($container->privates['monolog.handler.console_very_verbose'] ?? null);
            }
            if (isset($container->services['.container.private.security.token_storage'])) {
                yield 'security.token_storage' => ($container->services['.container.private.security.token_storage'] ?? null);
            }
            if (isset($container->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($container->privates['debug.security.firewall'])) {
                yield 'debug.security.firewall' => ($container->privates['debug.security.firewall'] ?? null);
            }
            if (isset($container->services['contao.listener.data_container.cte_alias'])) {
                yield 'contao.listener.data_container.cte_alias' => ($container->services['contao.listener.data_container.cte_alias'] ?? null);
            }
            if (isset($container->services['contao.listener.data_container.layout_options'])) {
                yield 'contao.listener.data_container.layout_options' => ($container->services['contao.listener.data_container.layout_options'] ?? null);
            }
            if (isset($container->privates['contao.listener.merge_http_headers'])) {
                yield 'contao.listener.merge_http_headers' => ($container->privates['contao.listener.merge_http_headers'] ?? null);
            }
            if (isset($container->privates['contao.listener.subrequest_cache'])) {
                yield 'contao.listener.subrequest_cache' => ($container->privates['contao.listener.subrequest_cache'] ?? null);
            }
            if (isset($container->services['contao.csrf.token_manager'])) {
                yield 'contao.csrf.token_manager' => ($container->services['contao.csrf.token_manager'] ?? null);
            }
            if (isset($container->privates['contao.csrf.token_storage'])) {
                yield 'contao.csrf.token_storage' => ($container->privates['contao.csrf.token_storage'] ?? null);
            }
            if (isset($container->privates['contao.data_collector'])) {
                yield 'contao.data_collector' => ($container->privates['contao.data_collector'] ?? null);
            }
            if (isset($container->services['contao.framework'])) {
                yield 'contao.framework' => ($container->services['contao.framework'] ?? null);
            }
            if (isset($container->services['contao.image.sizes'])) {
                yield 'contao.image.sizes' => ($container->services['contao.image.sizes'] ?? null);
            }
            if (isset($container->services['contao.insert_tag.parser'])) {
                yield 'contao.insert_tag.parser' => ($container->services['contao.insert_tag.parser'] ?? null);
            }
            if (isset($container->privates['contao.monolog.handler'])) {
                yield 'contao.monolog.handler' => ($container->privates['contao.monolog.handler'] ?? null);
            }
            if (isset($container->services['contao.routing.page_registry'])) {
                yield 'contao.routing.page_registry' => ($container->services['contao.routing.page_registry'] ?? null);
            }
            if (isset($container->privates['contao.security.backend_access_voter'])) {
                yield 'contao.security.backend_access_voter' => ($container->privates['contao.security.backend_access_voter'] ?? null);
            }
            if (isset($container->privates['contao.translation.data_collector_translator'])) {
                yield 'contao.translation.data_collector_translator' => ($container->privates['contao.translation.data_collector_translator'] ?? null);
            }
            if (isset($container->services['contao.twig.filesystem_loader'])) {
                yield 'contao.twig.filesystem_loader' => ($container->services['contao.twig.filesystem_loader'] ?? null);
            }
            if (isset($container->privates['.debug.http_client'])) {
                yield '.debug.http_client' => ($container->privates['.debug.http_client'] ?? null);
            }
            if (false) {
                yield 'contao.filesystem.dbafs.files' => null;
            }
        }, function () use ($container) {
            return 0 + (int) (isset($container->services['doctrine'])) + (int) (isset($container->privates['doctrine.debug_data_holder'])) + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (isset($container->privates['cache.validator'])) + (int) (isset($container->privates['cache.serializer'])) + (int) (isset($container->privates['cache.annotations'])) + (int) (isset($container->privates['cache.property_info'])) + (int) (isset($container->privates['.debug.http_client'])) + (int) (isset($container->privates['mailer.message_logger_listener'])) + (int) (isset($container->services['debug.stopwatch'])) + (int) (isset($container->services['event_dispatcher'])) + (int) (isset($container->privates['doctrine.result_cache_pool'])) + (int) (isset($container->privates['doctrine.system_cache_pool'])) + (int) (isset($container->privates['session_listener'])) + (int) (isset($container->services['.container.private.profiler'])) + (int) (isset($container->privates['monolog.handler.main'])) + (int) (isset($container->privates['monolog.handler.console'])) + (int) (isset($container->privates['monolog.handler.console_very_verbose'])) + (int) (isset($container->services['.container.private.security.token_storage'])) + (int) (isset($container->privates['cache.security_expression_language'])) + (int) (isset($container->privates['debug.security.firewall'])) + (int) (isset($container->services['contao.listener.data_container.cte_alias'])) + (int) (isset($container->services['contao.listener.data_container.layout_options'])) + (int) (isset($container->privates['contao.listener.merge_http_headers'])) + (int) (isset($container->privates['contao.listener.subrequest_cache'])) + (int) (isset($container->services['contao.csrf.token_manager'])) + (int) (isset($container->privates['contao.csrf.token_storage'])) + (int) (isset($container->privates['contao.data_collector'])) + (int) (isset($container->services['contao.framework'])) + (int) (isset($container->services['contao.image.sizes'])) + (int) (isset($container->services['contao.insert_tag.parser'])) + (int) (isset($container->privates['contao.monolog.handler'])) + (int) (isset($container->services['contao.routing.page_registry'])) + (int) (isset($container->privates['contao.security.backend_access_voter'])) + (int) (isset($container->privates['contao.translation.data_collector_translator'])) + (int) (isset($container->services['contao.twig.filesystem_loader'])) + (int) (isset($container->privates['.debug.http_client'])) + (int) (false);
        }), ['doctrine' => [0 => 'reset'], 'doctrine.debug_data_holder' => [0 => 'reset'], 'cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'http_client' => [0 => '?reset'], 'mailer.message_logger_listener' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'doctrine.result_cache_pool' => [0 => 'reset'], 'doctrine.system_cache_pool' => [0 => 'reset'], 'session_listener' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset'], 'monolog.handler.console_very_verbose' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'debug.security.firewall' => [0 => 'reset'], 'contao.listener.data_container.cte_alias' => [0 => 'reset'], 'contao.listener.data_container.layout_options' => [0 => 'reset'], 'contao.listener.merge_http_headers' => [0 => 'reset'], 'contao.listener.subrequest_cache' => [0 => 'reset'], 'contao.csrf.token_manager' => [0 => 'reset'], 'contao.csrf.token_storage' => [0 => 'reset'], 'contao.data_collector' => [0 => 'reset'], 'contao.framework' => [0 => 'reset'], 'contao.image.sizes' => [0 => 'reset'], 'contao.insert_tag.parser' => [0 => 'reset'], 'contao.monolog.handler' => [0 => 'reset'], 'contao.routing.page_registry' => [0 => 'reset'], 'contao.security.backend_access_voter' => [0 => 'reset'], 'contao.translation.data_collector_translator' => [0 => 'reset'], 'contao.twig.filesystem_loader' => [0 => 'reset'], '.debug.http_client' => [0 => 'reset'], 'contao.filesystem.dbafs.files' => [0 => 'reset']]);
    }
}
