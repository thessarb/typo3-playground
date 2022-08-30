<?php
defined('TYPO3_MODE') || die();
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Contenance\Sitepackage\Controller\StoreInventoryController;


/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sitepackage'] = 'EXT:sitepackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage/Configuration/TsConfig/Page/All.tsconfig">');



/***************
* Custom PLugins
*/

ExtensionUtility::configurePlugin(
    'sitepackage',
    'InventoryList',
    [StoreInventoryController::class => 'list, edit, store, update, delete',],
    [StoreInventoryController::class => '',],
);
               