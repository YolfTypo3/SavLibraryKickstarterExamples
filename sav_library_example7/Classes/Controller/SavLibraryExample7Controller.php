<?php

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

namespace YolfTypo3\SavLibraryExample7\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Plugin 'SAV Library Example7 - Guest book' for the 'sav_library_example7' extension.
 *
 * @author Laurent Foulloy <yolf.typo3@orange.fr>
 * @package sav_library_example7
 */
class SavLibraryExample7Controller extends \TYPO3\CMS\Frontend\Plugin\AbstractPlugin
{
	/**
	 * PrefixId
	 * @var string
	 */
	public $prefixId = 'tx_savlibraryexample7_pi1';

	/**
	 * Extension key
	 * @var string
	 */
	public $extKey = 'sav_library_example7';

	/**
	 * The main function
	 *
	 * @param string $content
	 * @param array $configuration
	 *
	 * @return string the plugin content
	 */
	public function main(string $content, array $configuration) : string
	{
	  // Creates the SavLibraryPlus controller
	  $controller = GeneralUtility::makeInstance(\YolfTypo3\SavLibraryPlus\Controller\Controller::class);

	  // Gets the extension configuration manager
	  $extensionConfigurationManager = $controller->getExtensionConfigurationManager();

	  // Injects the extension in the extension configuration manager
	  $extensionConfigurationManager->injectExtension($this);
	  // Injects the typoScript configuration in the extension configuration manager
	  $extensionConfigurationManager->injectTypoScriptConfiguration($configuration);

	  // Sets the debug variable. Use debug ONLY for development
	  $controller->setDebug(0);

	  // Renders the form
	  $out = $controller->render();

	  return $out;
	}
}

