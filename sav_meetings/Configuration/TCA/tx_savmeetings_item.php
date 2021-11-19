<?php

defined('TYPO3_MODE') or die();

if (version_compare(\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getVersion(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => 'hidden,subject,proposed_by,expected_duration,file,report'
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savmeetings_item.crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_meetings/Resources/Public/Icons/icon_tx_savmeetings_item.gif',
    ],
    'interface' => $interface,
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf.xlf:LGL.hidden',
            'config' => [
                'type'  => 'check',
                'default' => 0,
            ]
        ],
        'subject' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.subject',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'proposed_by' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.proposed_by',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.proposed_by.I.0', 0],
                ],
                'foreign_table' => 'fe_users',
                'foreign_table_where' => ' ',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'expected_duration' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.expected_duration',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'file' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.file',
            'config' =>	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                	'file',
                	[
                    	'maxitems' => 3,
                    	'uploadfolder' => 'user_upload',
                	],
                	'',
                	'php,php3'
            ),
        ],
        'report' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.report',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'enableRichtext' => true,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, subject, proposed_by, expected_duration, file, report' . '',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

