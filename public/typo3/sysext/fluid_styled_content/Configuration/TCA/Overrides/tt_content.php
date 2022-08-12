<?php

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        // title
        'LLL:EXT:examples/Resources/Private/Language/locallang.xlf:examples_newcontentelement_title',
        // plugin signature: extkey_identifier
        'examples_newcontentelement',
        // icon identifier
        'content-text',
    ],
    'textmedia',
    'after'
);
