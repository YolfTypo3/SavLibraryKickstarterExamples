<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    // Icon identifier
    'tx-savlibrarymvcexample0-svgicon' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:sav_librarymvc_example0/Resources/Public/Icons/Extension.svg',
    ],
];