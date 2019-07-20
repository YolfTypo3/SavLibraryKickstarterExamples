<?php

namespace YolfTypo3\SavCharts\Controller;

/**
*  Copyright notice
*
*  (c) 2019 Laurent Foulloy <yolf.typo3@orange.fr>
*
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
*/

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Class that adds the wizard icon.
 *
 */
class DefaultWizardIcon {
	/**
	 * Processes the wizard items array.
	 *
	 * @param array $wizardItems The wizard items
	 * @return array Modified array with wizard items
	 */
	public function proc(array $wizardItems) {
		$LL = $this->includeLocalLang();
		$wizardItems['plugins_tx_savcharts_default'] = array(
			'icon'        => 'EXT:sav_charts/Resources/Public/Icons/icon_savcharts.png',
			'title'       => $GLOBALS['LANG']->getLLL('plugin_title', $LL),
			'description' => $GLOBALS['LANG']->getLLL('plugin_wizard_description', $LL),
			'params'      => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=savcharts_default'
		);
		return $wizardItems;
	}
	/**
	 * Reads the extension locallang.xml and returns the $LOCAL_LANG array found in that file.
	 *
	 * @return array The array with language labels
	 */
	protected function includeLocalLang() {
		$llFile = ExtensionManagementUtility::extPath('sav_charts') . 'Resources/Private/Language/locallang.xlf';
		return $GLOBALS['LANG']->includeLLFile($llFile, FALSE);
	}
}
?>
