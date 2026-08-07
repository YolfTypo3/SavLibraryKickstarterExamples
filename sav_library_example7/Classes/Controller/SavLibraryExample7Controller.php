<?php

declare(strict_types=1);

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

use TYPO3\CMS\Core\Attribute\AsAllowedCallable;
use YolfTypo3\SavLibraryPlus\Controller\Controller;

/**
 * Plugin 'SAV Library Example7 - Guest book' for the 'sav_library_example7' extension.
 *
 * @author Laurent Foulloy <yolf.typo3@orange.fr>
 * @package sav_library_example7
 */
final class SavLibraryExample7Controller extends Controller
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
	public $extensionKey = 'sav_library_example7';

	/**
	 * The main function
	 *
	 * @param string $content
	 * @param array $configuration
	 *
	 * @return string the plugin content
	 */
	#[AsAllowedCallable]
	public function main(string $content, array $configuration): string
	{
		// Sets the debug variable. Use debug ONLY for development.
		$this->setDebug(0);

		// Renders the form
		$out = $this->render($configuration);

		return $out;
	}
}
