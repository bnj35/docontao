<?php

namespace ContainerPn2MccK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LmV1W6h_Contao_Fragment_Contao_ContentElement_MarkdownService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.service_locator.lmV1W6h.contao.fragment._contao.content_element.markdown' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return ($container->privates['.service_locator.lmV1W6h'] ?? $container->load('get_ServiceLocator_LmV1W6hService'))->withContext('contao.fragment._contao.content_element.markdown', $container);
    }
}
