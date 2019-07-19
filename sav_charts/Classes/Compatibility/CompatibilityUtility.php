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

use TYPO3\CMS\Core\Utility\CsvUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class CompatibilityUtility {
    /**
     * Takes a row and returns a CSV string of the values with $delim (default is ,) and $quote (default is ") as separator chars.
     *
     * @param array $row Input array of values
     * @param string $delim Delimited, default is comma
     * @param string $quote Quote-character to wrap around the values.
     * @return string A single line of CSV
     */
    public static function csvValues(array $row, string $delim = ',', string $quote = '"') : string
    {
        if (version_compare(TYPO3_version, '8.0', '<')) {
            // @extensionScannerIgnoreLine
            return GeneralUtility::csvValues($row, $delim, $quote);
        } else {
            return CsvUtility::csvValues($row, $delim, $quote);
        }
    }

}

?>