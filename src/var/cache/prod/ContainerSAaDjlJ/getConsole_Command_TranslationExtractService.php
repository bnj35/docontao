<?php

namespace ContainerSAaDjlJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationExtractService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'console.command.translation_extract' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';

        $container->privates['console.command.translation_extract'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 5 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/BackendCsvImportController.php'), 6 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/BackendPreviewSwitchController.php'), 7 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/BackendLocaleListener.php'), 8 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/BackendRebuildCacheMessageListener.php'), 9 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/ContentCompositionListener.php'), 10 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/DisableAppConfiguredSettingsListener.php'), 11 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/DisableCanonicalFieldsListener.php'), 12 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/MemberGroupsListener.php'), 13 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/PageUrlListener.php'), 14 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/PreviewLinkListener.php'), 15 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/ThemeTemplatesListener.php'), 16 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/Undo/JumpToParentButtonListener.php'), 17 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/ValidateCustomRgxpListener.php'), 18 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/InsertTags/TranslationListener.php'), 19 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/LocaleSubscriber.php'), 20 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Menu/BackendMenuListener.php'), 21 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Menu/BackendLogoutListener.php'), 22 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Menu/BackendPreviewListener.php'), 23 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Widget/CustomRgxpListener.php'), 24 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Widget/HttpUrlListener.php'), 25 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Widget/RootPageDependentSelectListener.php'), 26 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version404/Version447Update.php'), 27 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Crawl/Escargot/Subscriber/BrokenLinkCheckerSubscriber.php'), 28 => (\dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/EscargotAwareTrait.php'), 29 => (\dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerAwareTrait.php'), 30 => (\dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/SubscriberLoggerTrait.php'), 31 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Crawl/Escargot/Subscriber/SearchIndexSubscriber.php'), 32 => (\dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/EscargotAwareTrait.php'), 33 => (\dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerAwareTrait.php'), 34 => (\dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/SubscriberLoggerTrait.php'), 35 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/ImageSizes.php'), 36 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Intl/Countries.php'), 37 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Intl/Locales.php'), 38 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Mailer/AvailableTransports.php'), 39 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/PagePickerProvider.php'), 40 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/FilePickerProvider.php'), 41 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareTrait.php'), 42 => (\dirname(__DIR__, 4).'/vendor/contao/news-bundle/src/Picker/NewsPickerProvider.php'), 43 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareTrait.php'), 44 => (\dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/Picker/EventPickerProvider.php'), 45 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareTrait.php'), 46 => (\dirname(__DIR__, 4).'/vendor/contao/faq-bundle/src/Picker/FaqPickerProvider.php'), 47 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareTrait.php'), 48 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/ArticlePickerProvider.php'), 49 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/TablePickerProvider.php'), 50 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Slug/ValidCharacters.php'), 51 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Twig/Finder/FinderFactory.php'), 52 => (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/LegacyRoutingListener.php'), 53 => (\dirname(__DIR__, 4).'/vendor/contao/manager-bundle/src/EventListener/BackendMenuListener.php'), 54 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 55 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/src/DateTimeFormatter.php')], []);

        $instance->setName('translation:extract');
        $instance->setAliases([0 => 'translation:update']);
        $instance->setDescription('Extract missing translations keys from code to translation files.');

        return $instance;
    }
}
