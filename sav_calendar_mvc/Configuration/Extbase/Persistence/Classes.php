<?php

declare(strict_types=1);

return [
    \YolfTypo3\SavLibraryMvc\Domain\Model\FrontendUser::class => [
        'tableName' => 'fe_users',
    ],
    \YolfTypo3\SavLibraryMvc\Domain\Model\FrontendUserGroup::class => [
        'tableName' => 'fe_groups',
    ],
    \YolfTypo3\SavCalendarMvc\Domain\Model\Event::class => [
        'tableName' => 'tx_savcalendarmvc_domain_model_event',
    ],
    \YolfTypo3\SavCalendarMvc\Domain\Model\Category::class => [
        'tableName' => 'tx_savcalendarmvc_domain_model_category',
    ],
];