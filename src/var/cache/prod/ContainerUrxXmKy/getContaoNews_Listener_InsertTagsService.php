<?php

namespace ContainerUrxXmKy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoNews_Listener_InsertTagsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao_news.listener.insert_tags' shared service.
     *
     * @return \Contao\NewsBundle\EventListener\InsertTagsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/news-bundle/src/EventListener/InsertTagsListener.php';

        return $container->services['contao_news.listener.insert_tags'] = new \Contao\NewsBundle\EventListener\InsertTagsListener(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()));
    }
}
