<?php

defined('TYPO3_MODE') or die();

if (version_compare(\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getVersion(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => 'hidden,firstname,lastname,street,zipcode,city,image'
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members',
        'label' => 'lastname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample1_members.crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example1/Resources/Public/Icons/icon_tx_savlibraryexample1_members.gif',
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
        'firstname' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.firstname',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'lastname' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.lastname',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'street' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.street',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
        'zipcode' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.zipcode',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'city' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.city',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'image' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.image',
            'config' =>	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                	'image',
                	[
                    	'maxitems' => 1,
                    	'uploadfolder' => 'user_upload',
                	],
                	$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                	''
            ),
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, firstname, lastname, street, zipcode, city, image',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

