<?php
namespace YolfTypo3\SavCharts\Controller;

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
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\PathUtility;
use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Extbase\Configuration\FrontendConfigurationManager;
use TYPO3\CMS\Extbase\Service\TypoScriptService;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use YolfTypo3\SavCharts\XmlParser\XmlParser;

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
    protected static $cssPath = 'Resources/Public/Css/SavCharts.css';

    /**
     * js root path
     *
     * @var string
     */
    protected static $javaScriptRootPath = 'Resources/Public/JavaScript';

    /**
     * Query repository
     *
     * @var \YolfTypo3\SavCharts\Domain\Repository\QueryRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     * @extensionScannerIgnoreLine
     * @inject
     */
    protected $queryRepository;

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
     * Gets the query repository
     *
     * @return \YolfTypo3\SavCharts\Domain\Repository\QueryRepository
     */
    public function getQueryRepository()
    {
        return $this->queryRepository;
    }

    /**
     * Gets the content object
     *
     * @return \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer
     */
    public function getContentObjectRenderer()
    {
        return $this->configurationManager->getContentObject();
    }

    /**
     * Gets the extension key
     *
     * @return string
     */
    public function getExtensionKey()
    {
        return $this->request->getControllerExtensionKey();
    }

    /**
     * show action
     *
     * @return void
     */
    public function showAction()
    {
        // Gets the extension key
        $extensionKey = $this->getExtensionKey();

        // Creates the xml parser
        $xmlParser = GeneralUtility::makeInstance(XmlParser::class);
        $xmlParser->injectController($this);
        $xmlParser->clearXmlTagResults();

        // Loads the markers and processes them
        $xmlParser->loadXmlString($this->settings['flexform']['xmlMarkersConfig']);
        $xmlParser->parseXml();

        // Sets markers defined by typoscript
        $typoScriptService = GeneralUtility::makeInstance(TypoScriptService::class);
        $typoScriptConfiguration = $typoScriptService->convertPlainArrayToTypoScriptArray($this->getSettings());
        if (is_array($typoScriptConfiguration) && is_array($typoScriptConfiguration['marker.'])) {
            $typoScriptMarkers = $typoScriptConfiguration['marker.'];
            foreach ($typoScriptMarkers as $typoScriptMarkerKey => $typoScriptMarker) {
                if (strpos($typoScriptMarkerKey, '.') === false) {
                    $typoScriptValue = $this->getContentObjectRenderer()->cObjGetSingle($typoScriptMarker, $typoScriptMarkers[$typoScriptMarkerKey . '.']);
                    $xmlTagObject = XmlParser::getXmlTagObject('marker');
                    $xmlTagObject->setXmlTagId($typoScriptMarkerKey);
                    $xmlTagObject->setXmlTagValue($typoScriptValue);
                    XmlParser::setXmlTagResult('marker', $typoScriptMarkerKey, $xmlTagObject);
                }
            }
        }

        // Loads the queries and processes them
        $xmlParser->loadXmlString($this->settings['flexform']['xmlQueriesConfig']);
        $xmlParser->parseXml();

        // Loads the data and processes them
        $xmlParser->loadXmlString($this->settings['flexform']['xmlDataConfig']);
        $xmlParser->parseXml();

        // Loads the templates and processes them
        $xmlParser->loadXmlString($this->settings['flexform']['xmlTemplatesConfig']);
        $xmlParser->parseXml();

        // Post-processing to get the javascript
        $result = $xmlParser->postProcessing();
        $canvases = $result['canvases'];
        foreach ($canvases as $canvas) {
            $this->addJavaScriptFooterInlineCode($canvas['chartId'], $result['javaScriptFooterInlineCode']);
        }

        // Adds the latest javascript file
        $javaScriptRootDirectory = ExtensionManagementUtility::extPath($extensionKey) . self::$javaScriptRootPath;
        $javaScriptFiles = scandir($javaScriptRootDirectory, SCANDIR_SORT_DESCENDING);
        $extensionWebPath = self::getExtensionWebPath($extensionKey);
        $javaScriptFooterFile = $extensionWebPath . self::$javaScriptRootPath . '/' . $javaScriptFiles[0];
        $this->addJavaScriptFooterFile($javaScriptFooterFile);

        // Adds the css file
        $extensionWebPath = self::getExtensionWebPath($extensionKey);
        $cssFile = $extensionWebPath . self::$cssPath;
        $this->addCascadingStyleSheet($cssFile);

        // Adds the canvases to the view
        $this->view->assign('canvases', $canvases);
    }

    /**
     * Formats a configuration
     *
     * @param string $key
     * @param mixed $value
     *
     * @return string
     */
    protected function formatConfiguration($key, $value)
    {
        if (is_string($value)) {
            $value = '\'' . $value . '\'';
        }
        return $key . ':' . $value;
    }

    /**
     * Adds a javaScript file
     *
     * @param string $javaScriptFileName
     *
     * @return void
     */
    protected function addJavaScriptFooterFile(string $javaScriptFileName)
    {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->addJsFooterFile($javaScriptFileName);
    }

    /**
     * Adds a javaScript inline code
     *
     * @param string $key
     * @param string $javaScriptFileName
     *
     * @return void
     */
    protected function addJavaScriptFooterInlineCode(string $key, string $javaScriptInlineCode)
    {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->addJsFooterInlineCode($key, $javaScriptInlineCode);
    }

    /**
     * Adds a cascading style Sheet
     *
     * @param string $cascadingStyleSheet
     *
     * @return void
     */
    protected function addCascadingStyleSheet(string $cascadingStyleSheet)
    {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->addCssFile($cascadingStyleSheet);
    }

    /**
     * Adds an error to the errors array
     *
     * @param string $key
     *            The message key
     * @param array $arguments
     *            The argument array
     *
     * @return bool Returns always false so that it can be used in return statements
     */
    public function addError(string $key, array $arguments = null) : bool
    {
        // Gets the extension key
        $extensionKey = $this->getExtensionKey();

        // Sets the message
        $message = LocalizationUtility::translate($key, $extensionKey, $arguments);
        if ($message === null) {
            $message = $key;
        }

        $this->addFlashMessage($message, '', FlashMessage::ERROR);
        return false;
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

