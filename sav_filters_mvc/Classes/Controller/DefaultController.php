<?php
namespace YolfTypo3\SavFiltersMvc\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with TYPO3 source code.
 *
 * The TYPO3 project - inspiring people to share
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\PathUtility;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Configuration\FrontendConfigurationManager;
use TYPO3\CMS\Extbase\Mvc\Request;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
use YolfTypo3\SavFiltersMvc\Filters\AlphabeticFilter;
use YolfTypo3\SavFiltersMvc\Filters\MonthsFilter;
use YolfTypo3\SavFiltersMvc\Filters\SearchFilter;
use YolfTypo3\SavFiltersMvc\Filters\SelectorsFilter;
use YolfTypo3\SavFiltersMvc\Filters\MiniCalendarFilter;

/**
 * Default Controller
 */
class DefaultController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * Css path
     *
     * @var string
     */
    protected static $cssPath = 'Resources/Public/Css/SavFiltersMvc.css';

    /**
     * Initializes the controller before invoking an action method.
     *
     * @return void
     */
    protected function initializeAction()
    {
        // Gets the extension key
        $extensionKey = $this->request->getControllerExtensionKey();

        // Checks if the static extension template is included
        /** @var FrontendConfigurationManager $frontendConfigurationManager */
        $frontendConfigurationManager = GeneralUtility::makeInstance(FrontendConfigurationManager::class);
        $typoScriptSetup = $frontendConfigurationManager->getTypoScriptSetup();
        $pluginSetupName = 'tx_' . strtolower($this->request->getControllerExtensionName()) . '.';
        if (!@is_array($typoScriptSetup['plugin.'][$pluginSetupName]['view.'])) {
            die('Fatal error: You have to include the static template of the extension ' . $extensionKey . '.');
        }

        // Adds the css file
        $cssFile = self::getExtensionWebPath($extensionKey) . self::$cssPath;
        $this->addCascadingStyleSheet($cssFile);
    }

    /**
     * default action
     *
     * @return void
     */
    public function defaultAction()
    {
        // Gets the view type
        $viewType = $this->settings['flexform']['type'];

        // Renders the view
        switch ($viewType) {
            case 1:
                $templateFile = 'AlphabeticFilter.html';
                $filterClassName = AlphabeticFilter::class;
                break;
            case 2:
                $templateFile = 'MonthsFilter.html';
                $filterClassName = MonthsFilter::class;
                break;
            case 3:
                $templateFile = 'SearchFilter.html';
                $filterClassName = SearchFilter::class;
                break;
            case 4:
                $templateFile = 'SelectorsFilter.html';
                $filterClassName = SelectorsFilter::class;
                break;
            case 5:
                $templateFile = 'MiniCalendarFilter.html';
                $filterClassName = MiniCalendarFilter::class;
                break;
            default:
                $templateFile = 'Default.html';
                break;
        }

        $template = $this->getDefaultTemplateRootPath() . $templateFile;
        $this->view->setTemplatePathAndFilename($template);

        if (! empty($filterClassName)) {
            $filter = $this->objectManager->get($filterClassName);
            $filter->setController($this);
            $filter->render();
        }
    }

    /**
     * Gets the configuration manager
     *
     * @return ConfigurationManagerInterface
     */
    public function getConfigurationManager()
    {
        return $this->configurationManager;
    }

    /**
     * Gets the request
     *
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Gets the settings
     *
     * @return array
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Gets the view
     *
     * @return ViewInterface
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Adds a cascading style Sheet
     *
     * @param string $cascadingStyleSheet
     *
     * @return void
     */
    protected function addCascadingStyleSheet($cascadingStyleSheet)
    {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->addCssFile($cascadingStyleSheet);
    }

    /**
     * Gets the default root path
     *
     * @return string
     */
    protected function getDefaultTemplateRootPath()
    {
        $templateRootPaths = $this->view->getTemplateRootPaths();
        return $templateRootPaths[0] . 'Default/';
    }

    /**
     * Gets the relative web path of a given extension.
     *
     * @param string $extension
     *            The extension
     *
     * @return string The relative web path
     */
    protected static function getExtensionWebPath(string $extension) : string
    {
        $extensionWebPath = PathUtility::getAbsoluteWebPath(ExtensionManagementUtility::extPath($extension));
        if ($extensionWebPath[0] === '/') {
            // Makes the path relative
            $extensionWebPath = substr($extensionWebPath, 1);
        }
        return $extensionWebPath;
    }
}
?>

