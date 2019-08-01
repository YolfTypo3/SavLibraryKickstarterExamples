<?php
namespace YolfTypo3\SavLibraryExample5\Hooks;

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
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Fluid\View\StandaloneView;
use YolfTypo3\SavLibraryPlus\Hooks\AbstractHook;

class SavLibraryPlus extends AbstractHook
{

    /**
     * Renders the hook
     *
     * @param array $parameters
     *
     * @return string
     */
    public function renderHook($parameters)
    {
        // Gets the parameters
        $template = $parameters['template'];
        $uid = $parameters['uid'];

        // Creates a view for more fluid processings of the template
        /** @var StandaloneView $view */
        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setTemplatePathAndFilename('EXT:sav_library_example5/Resources/Private/Templates/' . $template);

        // Selects the record
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_savlibraryexample5');
        $rows = $queryBuilder->select('*')
            ->from('tx_savlibraryexample5')
            ->where($queryBuilder->expr()
            ->eq('uid', $queryBuilder->createNamedParameter($uid, \PDO::PARAM_INT)))
            ->execute()
            ->fetchAll();

        // Assigns the row variable
        $view->assign('row', $rows[0]);

        // Renders the content
        $content = $view->render();

        return $content;
    }
}

?>
