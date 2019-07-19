<?php
namespace YolfTypo3\SavCharts\Compatibility;

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

class TypoScriptServiceCompatibility {
    /**
     * Gets the TypoScript service class
     *
     * @return string
     */
    public static function getTypoScriptServiceClass()
    {
        if (version_compare(TYPO3_version, '8.0', '<')) {
            return \TYPO3\CMS\Extbase\Service\TypoScriptService::class;
        } else {
            return \TYPO3\CMS\Core\TypoScript\TypoScriptService::class;
        }
    }

}

?>