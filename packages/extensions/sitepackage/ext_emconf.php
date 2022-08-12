<?php

/**
 * Extension Manager/Repository config file for ext "sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99',
            'rte_ckeditor' => '10.4.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Contenance\\Sitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Arb S',
    'author_email' => 'sala@contenance.de',
    'author_company' => 'contenance',
    'version' => '1.0.0',
];
