<?php

namespace ContainerYaHm9JO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_ElementTemplateOptionsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.element_template_options' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\TemplateOptionsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/TemplateOptionsListener.php';

        $container->services['contao.listener.element_template_options'] = $instance = new \Contao\CoreBundle\EventListener\DataContainer\TemplateOptionsListener(($container->privates['contao.twig.finder_factory'] ?? $container->load('getContao_Twig_FinderFactoryService')), ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'ce_', 'Contao\\ContentProxy');

        $instance->setDefaultIdentifiersByType(['markdown' => 'ce_markdown', 'template' => 'ce_template']);

        return $instance;
    }
}
