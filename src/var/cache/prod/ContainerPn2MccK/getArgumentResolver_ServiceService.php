<?php

namespace ContainerPn2MccK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Contao\\CoreBundle\\Controller\\ContentElement\\MarkdownController::__invoke' => ['privates', '.service_locator.P7RIXCQ', 'get_ServiceLocator_P7RIXCQService', true],
            'Contao\\CoreBundle\\Controller\\ContentElement\\TemplateController::__invoke' => ['privates', '.service_locator.P7RIXCQ', 'get_ServiceLocator_P7RIXCQService', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController::__invoke' => ['privates', '.service_locator.YzRrb0P', 'get_ServiceLocator_YzRrb0PService', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController::getResponse' => ['privates', '.service_locator.RvEsqSz', 'get_ServiceLocator_RvEsqSzService', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TemplateController::__invoke' => ['privates', '.service_locator.YzRrb0P', 'get_ServiceLocator_YzRrb0PService', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController::__invoke' => ['privates', '.service_locator.6j.fXf6', 'get_ServiceLocator_6j_FXf6Service', true],
            'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController::__invoke' => ['privates', '.service_locator.5ijE3KR', 'get_ServiceLocator_5ijE3KRService', true],
            'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController::supportsContentComposition' => ['privates', '.service_locator.5ijE3KR', 'get_ServiceLocator_5ijE3KRService', true],
            'Contao\\CoreBundle\\Controller\\Page\\RootPageController::__invoke' => ['privates', '.service_locator.5ijE3KR', 'get_ServiceLocator_5ijE3KRService', true],
            'Contao\\CoreBundle\\Controller\\ContentElement\\MarkdownController:__invoke' => ['privates', '.service_locator.P7RIXCQ', 'get_ServiceLocator_P7RIXCQService', true],
            'Contao\\CoreBundle\\Controller\\ContentElement\\MarkdownController' => ['privates', '.service_locator.P7RIXCQ', 'get_ServiceLocator_P7RIXCQService', true],
            'Contao\\CoreBundle\\Controller\\ContentElement\\TemplateController:__invoke' => ['privates', '.service_locator.P7RIXCQ', 'get_ServiceLocator_P7RIXCQService', true],
            'Contao\\CoreBundle\\Controller\\ContentElement\\TemplateController' => ['privates', '.service_locator.P7RIXCQ', 'get_ServiceLocator_P7RIXCQService', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController:__invoke' => ['privates', '.service_locator.YzRrb0P', 'get_ServiceLocator_YzRrb0PService', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController' => ['privates', '.service_locator.YzRrb0P', 'get_ServiceLocator_YzRrb0PService', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController:getResponse' => ['privates', '.service_locator.RvEsqSz', 'get_ServiceLocator_RvEsqSzService', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TemplateController:__invoke' => ['privates', '.service_locator.YzRrb0P', 'get_ServiceLocator_YzRrb0PService', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TemplateController' => ['privates', '.service_locator.YzRrb0P', 'get_ServiceLocator_YzRrb0PService', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController:__invoke' => ['privates', '.service_locator.6j.fXf6', 'get_ServiceLocator_6j_FXf6Service', true],
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController' => ['privates', '.service_locator.6j.fXf6', 'get_ServiceLocator_6j_FXf6Service', true],
            'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController:__invoke' => ['privates', '.service_locator.5ijE3KR', 'get_ServiceLocator_5ijE3KRService', true],
            'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController' => ['privates', '.service_locator.5ijE3KR', 'get_ServiceLocator_5ijE3KRService', true],
            'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController:supportsContentComposition' => ['privates', '.service_locator.5ijE3KR', 'get_ServiceLocator_5ijE3KRService', true],
            'Contao\\CoreBundle\\Controller\\Page\\RootPageController:__invoke' => ['privates', '.service_locator.5ijE3KR', 'get_ServiceLocator_5ijE3KRService', true],
            'Contao\\CoreBundle\\Controller\\Page\\RootPageController' => ['privates', '.service_locator.5ijE3KR', 'get_ServiceLocator_5ijE3KRService', true],
        ], [
            'Contao\\CoreBundle\\Controller\\ContentElement\\MarkdownController::__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\ContentElement\\TemplateController::__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController::__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController::getResponse' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TemplateController::__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController::__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController::__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController::supportsContentComposition' => '?',
            'Contao\\CoreBundle\\Controller\\Page\\RootPageController::__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\ContentElement\\MarkdownController:__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\ContentElement\\MarkdownController' => '?',
            'Contao\\CoreBundle\\Controller\\ContentElement\\TemplateController:__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\ContentElement\\TemplateController' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController:__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\RootPageDependentModulesController:getResponse' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TemplateController:__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TemplateController' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController:__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController' => '?',
            'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController:__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController' => '?',
            'Contao\\CoreBundle\\Controller\\Page\\ErrorPageController:supportsContentComposition' => '?',
            'Contao\\CoreBundle\\Controller\\Page\\RootPageController:__invoke' => '?',
            'Contao\\CoreBundle\\Controller\\Page\\RootPageController' => '?',
        ]));
    }
}
