<?php
namespace YolfTypo3\SavLibraryKickstarter\Utility;

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

/**
 * Utilities for converting variables
 *
 * @package SavLibraryKickstarter
 */
class Conversion
{

    /**
     * Converts a string to upperCamel
     *
     * @param string $string
     *            The string to convert
     * @return string The string in upper Camel case
     */
    static public function upperCamel(string $string): string
    {
        $string = str_replace(' ', '_', $string);
        $parts = explode('_', $string);
        foreach ($parts as $part) {
            $output .= ucfirst($part);
        }
        return $output;
    }

    /**
     * Converts a string to lowerCamel
     *
     * @param string $string
     *            The string to convert
     * @return string The string in lower Camel case
     */
    static public function lowerCamel(string $string): string
    {
        $output = self::upperCamel($string);
        if (function_exists('lcfirst')) {
            return lcfirst($output);
        } else {
            $output[0] = strtolower($output[0]);
            return $output;
        }
    }

    /**
     * Converts a string to utf8
     *
     * @param string $string
     *            The string to convert
     * @return string The string in utf8
     */
    static public function stringToUtf8(string $string): string
    {
        if (! mb_detect_encoding($string, 'UTF-8', true)) {
            return utf8_encode($string);
        } else {
            return $string;
        }
    }
}
?>
