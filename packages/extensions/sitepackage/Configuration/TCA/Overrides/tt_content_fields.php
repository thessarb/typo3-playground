<?php
defined('TYPO3') or die('Access denied.');

// All fields
$allFields = [
    'selected_pokemon' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.selected_pokemon',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
            ['Pikachu', 'pikachu'],
            ['Squirtle', 'squirtle'],
            ['Bulbasaur', 'bulbasaur'],
            ['Charmander', 'charmander'],
            ],
            'default' => 'pikachu'
        ],
    ],
    'type_pokemon' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.type_pokemon',
        'config' => [
            'type' => 'radio',
            'items' => [
                ['Water', 'water'],
                ['Fire', 'fire'],
                ['Grass', 'grass'],
            ],
        ],
    ],
    'image_pokemon' => [
        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.image_pokemon',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', [
            'appearance' => [
            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.image_pokemon'
            ],
        ], $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext'])
    ],
    'mse_list_item' => [
        'exclude' => true,
        'label' => 'List Item',
        'config' => [
            'appearance' => [
                'collapseAll' => '1',
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'bottom',
                'useSortable' => '1',
            ],
            'foreign_field' => 'parent_uid',
            'foreign_table' => 'mse_tb_my_list',
            'foreign_table_field' => 'parent_table',
            'maxitems' => '20',
            'minitems' => '3',
            'type' => 'inline',
        ],
    ],
];   
