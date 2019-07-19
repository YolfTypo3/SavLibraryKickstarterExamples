<?php
namespace YolfTypo3\SavFiltersMvc\ViewHelpers;

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
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns an item in an array
 */
class GetItemViewHelper extends AbstractViewHelper
{

    /**
     * Renders the viewHelper.
     *
     * @param array $value
     *            The array in which the item will be extraced
     * @param string $key
     *            The key of the item
     *
     * @return mixed The item
     */
    public function render($value = null, $key = 0)
    {
        if ($value === null) {
            $value = $this->renderChildren();
        }

        return $value[$key];
    }
}
?>
