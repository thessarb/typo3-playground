<?php

class layout_Default_html_4b84333abcfe2ee825571eb860f78cb60c4abd81 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'mask' => 
  array (
    0 => 'MASK\\Mask\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayoutViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['pageTitle'] = '';
$arguments4['includeCssFiles'] = NULL;
$arguments4['includeJsFiles'] = NULL;
$arguments4['addJsInlineLabels'] = NULL;
$arguments4['includeRequireJsModules'] = NULL;
$arguments4['addInlineSettings'] = NULL;
// Rendering Array
$array6 = array();
$array6['0'] = 'TYPO3/CMS/Backend/ContextMenu';
$array6['1'] = 'TYPO3/CMS/Backend/Modal';
$array6['2'] = 'TYPO3/CMS/Beuser/BackendUserListing';
$arguments4['includeRequireJsModules'] = $array6;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['label'] = NULL;
$arguments10['uri'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['languageKey'] = NULL;
$arguments12['alternativeLanguageKeys'] = NULL;
$arguments12['id'] = 'backendUsers';
$arguments10['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['action'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['controller'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['pluginName'] = NULL;
$arguments14['pageUid'] = NULL;
$arguments14['pageType'] = 0;
$arguments14['noCache'] = NULL;
$arguments14['noCacheHash'] = NULL;
$arguments14['section'] = '';
$arguments14['format'] = '';
$arguments14['linkAccessRestrictedPages'] = false;
$arguments14['additionalParams'] = array (
);
$arguments14['absolute'] = false;
$arguments14['addQueryString'] = false;
$arguments14['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments14['addQueryStringMethod'] = NULL;
$arguments14['controller'] = 'BackendUser';
$arguments14['action'] = 'index';
$arguments10['uri'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output9 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['label'] = NULL;
$arguments16['uri'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['id'] = 'backendUserGroupsMenu';
$arguments16['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['action'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['controller'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['pluginName'] = NULL;
$arguments20['pageUid'] = NULL;
$arguments20['pageType'] = 0;
$arguments20['noCache'] = NULL;
$arguments20['noCacheHash'] = NULL;
$arguments20['section'] = '';
$arguments20['format'] = '';
$arguments20['linkAccessRestrictedPages'] = false;
$arguments20['additionalParams'] = array (
);
$arguments20['absolute'] = false;
$arguments20['addQueryString'] = false;
$arguments20['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments20['addQueryStringMethod'] = NULL;
$arguments20['controller'] = 'BackendUserGroup';
$arguments20['action'] = 'index';
$arguments16['uri'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output9 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output9 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['label'] = NULL;
$arguments28['uri'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['languageKey'] = NULL;
$arguments30['alternativeLanguageKeys'] = NULL;
$arguments30['id'] = 'compareBackendUsersGroups';
$arguments28['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['action'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['controller'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['pluginName'] = NULL;
$arguments32['pageUid'] = NULL;
$arguments32['pageType'] = 0;
$arguments32['noCache'] = NULL;
$arguments32['noCacheHash'] = NULL;
$arguments32['section'] = '';
$arguments32['format'] = '';
$arguments32['linkAccessRestrictedPages'] = false;
$arguments32['additionalParams'] = array (
);
$arguments32['absolute'] = false;
$arguments32['addQueryString'] = false;
$arguments32['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments32['addQueryStringMethod'] = NULL;
$arguments32['controller'] = 'BackendUserGroup';
$arguments32['action'] = 'compare';
$arguments28['uri'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output27 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
        ';
return $output27;
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('shortcutLabel', $array25);
$array24['1'] = ' == \'compareBackendUsersGroups\'';

$expression26 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'compareBackendUsersGroups');};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = $renderChildrenClosure23;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output9 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['label'] = NULL;
$arguments34['uri'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['languageKey'] = NULL;
$arguments36['alternativeLanguageKeys'] = NULL;
$arguments36['id'] = 'onlineUsers';
$arguments34['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['action'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['controller'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['pluginName'] = NULL;
$arguments38['pageUid'] = NULL;
$arguments38['pageType'] = 0;
$arguments38['noCache'] = NULL;
$arguments38['noCacheHash'] = NULL;
$arguments38['section'] = '';
$arguments38['format'] = '';
$arguments38['linkAccessRestrictedPages'] = false;
$arguments38['additionalParams'] = array (
);
$arguments38['absolute'] = false;
$arguments38['addQueryString'] = false;
$arguments38['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments38['addQueryStringMethod'] = NULL;
$arguments38['controller'] = 'BackendUser';
$arguments38['action'] = 'online';
$arguments34['uri'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output9 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output9 .= '
    ';
return $output9;
};
$arguments7 = array();
$arguments7['identifier'] = NULL;
$arguments7['identifier'] = 'BackendUserModuleMenu';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['renderable'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['debug'] = true;
$arguments40['section'] = 'Buttons';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\ShortcutButtonViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['icon'] = NULL;
$arguments42['title'] = NULL;
$arguments42['disabled'] = false;
$arguments42['showLabel'] = false;
$arguments42['position'] = NULL;
$arguments42['group'] = NULL;
$arguments42['displayName'] = NULL;
$arguments42['getVars'] = array (
);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$array46 = array (
);$arguments44['id'] = $renderingContext->getVariableProvider()->getByPath('shortcutLabel', $array46);
$arguments42['displayName'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\ShortcutButtonViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output3 .= '

    <div id="beuser-main-content">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['section'] = NULL;
$arguments47['partial'] = NULL;
$arguments47['delegate'] = NULL;
$arguments47['renderable'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['optional'] = false;
$arguments47['default'] = NULL;
$arguments47['contentAs'] = NULL;
$arguments47['debug'] = true;
$arguments47['section'] = 'Content';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output3 .= '
    </div>

';
return $output3;
};
$arguments1 = array();

$output0 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLayoutViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '


';

return $output0;
}


}
#