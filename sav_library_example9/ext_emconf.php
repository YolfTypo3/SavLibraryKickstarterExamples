<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "sav_library_example9"
 *
 * Auto generated by SAV Library Kickstarter 13-10-21
 *
 ***************************************************************/
 
$EM_CONF[$_EXTKEY] = [
    'title' => 'SAV Library Example9 - Graphs',
    'description' => 'Displays graphs in the extension. Graphs are generated by sav_charts.',
    'category' => 'plugin',
    'author' => 'Laurent Foulloy',
    'author_email' => 'yolf.typo3@orange.fr',
    'author_company' => '',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '11.5.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.28-11.5.99',
            'sav_charts' => '11.0.0-0.0.0',
            'sav_library_plus' => '9.5.0-0.0.0'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
