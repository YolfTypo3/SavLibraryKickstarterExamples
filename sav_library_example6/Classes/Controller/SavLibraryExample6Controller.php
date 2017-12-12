<?php

namespace YolfTypo3\SavLibraryExample6\Controller;

/***************************************************************
*  Copyright notice
*
*  (c) 2017 Laurent Foulloy <yolf.typo3@orange.fr>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script
***************************************************************/

use \TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Plugin 'SAV Library Example6 - Email and RTF' for the 'sav_library_example6' extension.
 *
 * @author Laurent Foulloy <yolf.typo3@orange.fr>
 * @package TYPO3
 * @subpackage sav_library_example6
 */
class SavLibraryExample6Controller extends \TYPO3\CMS\Frontend\Plugin\AbstractPlugin {

	/**
	 * Should be same as classname of the plugin, used for CSS classes, variables
	 *
	 * @var string
	 */
	public $prefixId = 'tx_savlibraryexample6_pi1';

	/**
	 * Extension key.
	 *
	 * @var string
	 */
	public $extKey = 'sav_library_example6';

	/**
	 * The main function
	 *
	 * @param string $content
	 * @param array $configuration
	 *
	 * @return string the plugin content
	 */            
	public function main($content, $configuration) {

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

?>
