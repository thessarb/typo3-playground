<?php
return array (
  'default' => 
  array (
  ),
  'typoscript' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ExpressionLanguage\\TypoScriptConditionProvider',
    1 => 'BK2K\\BootstrapPackage\\ExpressionLanguage\\ConditionProvider',
    2 => 'MASK\\Mask\\ExpressionLanguage\\MaskProvider',
  ),
  'site' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ExpressionLanguage\\SiteConditionProvider',
  ),
  'form' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ExpressionLanguage\\TypoScriptConditionProvider',
    1 => 'TYPO3\\CMS\\Form\\Domain\\Condition\\ConditionProvider',
  ),
);
#