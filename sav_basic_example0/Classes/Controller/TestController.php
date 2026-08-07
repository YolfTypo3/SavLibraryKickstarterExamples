<?php

declare(strict_types=1);

/**
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

namespace YolfTypo3\SavBasicExample0\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\PathUtility;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Extbase\Configuration\FrontendConfigurationManager;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Test Controller
 *
 * @author Laurent Foulloy <yolf.typo3@orange.fr>
 * @package sav_basic_example0
 */

final class TestController extends ActionController
{

	/**
     * Css path
     *
     * @var string
     */
    protected static $cssPath = 'Resources/Public/Css/SavBasicExample0.css';

    /**
     * Constructor
     */
    public function __construct(
        private readonly FrontendConfigurationManager $frontendConfigurationManager,
        ) {
    }

    /**
     * Initializes the controller before invoking an action method.
     *
     * @return void
     */
    protected function initializeAction(): void
	{
        // Gets the extension key
        $extensionKey = $this->request->getControllerExtensionKey();

        // Checks if the extension is included in the site configuration
        $lowerCamelExtensionKey = GeneralUtility::underscoredToLowerCamelCase($extensionKey);
        $siteSettings = $this->request->getAttribute('site')->getSettings();
        if (! $siteSettings->has($lowerCamelExtensionKey)) {
            throw new \RuntimeException('You have to include the extension ' . $extensionKey . ' in the site setup.');
        }

        // Adds the css file
        $extensionWebPath = 'EXT:' . $extensionKey . '/';
        $cssFile = $extensionWebPath . self::$cssPath;
        $this->addCascadingStyleSheet($cssFile);
	}

    /**
     * show action
     *
     * @return ResponseInterface
     */
    public function showAction(): ResponseInterface
	{
        $this->view->assign('extension', $this->request->getControllerExtensionKey());
        $this->view->assign('controller', $this->request->getControllerName());
        $this->view->assign('action', $this->request->getControllerActionName());

        return $this->htmlResponse($this->view->render());
	}

    /**
     * Adds a cascading style Sheet
     *
     * @param string $cascadingStyleSheet
     *
     * @return void
     */
    protected function addCascadingStyleSheet($cascadingStyleSheet): void
	{
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->addCssFile($cascadingStyleSheet);
	}
}