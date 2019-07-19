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
 * The TYPO3 project - inspiring people to share
 */

use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

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
	public function proc(array $wizardItems) : array
	{
		$wizardItems['plugins_tx_savcharts_default'] = [
			'iconIdentifier'        => 'tx-savcharts-wizard',
			'title'       => LocalizationUtility::translate('plugin_title', 'sav_charts'),
			'description' => LocalizationUtility::translate('plugin_wizard_description', 'sav_charts'),
			'params'      => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=savcharts_default'
		];
		return $wizardItems;
	}
}
?>
