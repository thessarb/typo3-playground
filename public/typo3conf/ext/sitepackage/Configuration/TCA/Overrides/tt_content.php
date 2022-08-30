<?php
defined('TYPO3') or die('Access denied.');
// Fields array has been moved here to make code cleaner
require_once 'tt_content_fields.php';

// Poekmon Element Basic info
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Pokemon Element',
        'pokemon_element',
        'content-target',
    ],
    'textmedia',
    'after'
);
// Here you decide what input fields to show.
$GLOBALS['TCA']['tt_content']['types']['pokemon_element'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header; Main Header,
            bodytext; Main Body,
            selected_pokemon; Choose your pokemon,
            type_pokemon; Pokemon Radio,
            image_pokemon; Pokemon Image,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            ],
        ],
    ],
];

// Iheritance Element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
        [
            'Inheritance Element',
            'inheritance_element',
            'content-target',
        ],
        'textmedia',
        'after'
);
$GLOBALS['TCA']['tt_content']['types']['inheritance_element'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        header; List Header,
        mse_list_item; Label,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
    ',
    'canNotCollapse' => 1,
];

//Custom Functionality MVC
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'sitepackage',
    'InventoryList',
    'The Store Inventory List',
    'EXT:sitepackage/Resources/Public/Icons/cat.svg'
);

// Add this fields to db
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $allFields);  