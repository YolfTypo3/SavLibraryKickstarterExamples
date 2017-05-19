<?php
namespace SAV\SavFiltersMvc\Controller;

/**
 * Copyright notice
 *
 * (c) 2016 Laurent Foulloy <yolf.typo3@orange.fr>
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script
 */
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Mvc\Request;
use SAV\SavFiltersMvc\Filters\AlphabeticFilter;
use SAV\SavFiltersMvc\Filters\MonthsFilter;
use SAV\SavFiltersMvc\Filters\SearchFilter;
use SAV\SavFiltersMvc\Filters\SelectorsFilter;
use SAV\SavFiltersMvc\Filters\MiniCalendarFilter;

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
    protected static $cssPath = 'Resources/Public/Styles/SavFiltersMvc.css';

    /**
     * Initializes the controller before invoking an action method.
     *
     * @return void
     */
    protected function initializeAction()
    {
        // Gets the extension key
        $extensionKey = $this->request->getControllerExtensionKey();

        // Adds the css file
        $cssFile = ExtensionManagementUtility::siteRelPath($extensionKey) . self::$cssPath;
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
     * @return none
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
        return $templateRootPaths[10] . 'Default/';
    }
}
?>

