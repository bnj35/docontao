<?php

namespace ContainerPn2MccK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTemplateControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\ContentElement\TemplateController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\TemplateController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/TemplateController.php';

        $container->services['Contao\\CoreBundle\\Controller\\ContentElement\\TemplateController'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\TemplateController();

        $instance->setContainer(($container->privates['.service_locator.GoOfrQe'] ?? $container->load('get_ServiceLocator_GoOfrQeService'))->withContext('Contao\\CoreBundle\\Controller\\ContentElement\\TemplateController', $container));

        return $instance;
    }
}
