<?php

class BackendUser_action_index_fd964802c2f063892924a266b14aa0452ac88bc5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Buttons
 */
public function section_503d46db37b0db45db898aabed77244252918ca2(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['icon'] = NULL;
$arguments1['title'] = NULL;
$arguments1['disabled'] = false;
$arguments1['showLabel'] = false;
$arguments1['position'] = NULL;
$arguments1['group'] = NULL;
$arguments1['link'] = NULL;
$arguments1['icon'] = 'actions-add';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['id'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:newRecordGeneral';
$arguments1['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['uid'] = NULL;
$arguments5['pid'] = NULL;
$arguments5['table'] = NULL;
$arguments5['returnUrl'] = '';
$arguments5['table'] = 'be_users';
$arguments1['link'] = TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';

return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output7 = '';

$output7 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['languageKey'] = NULL;
$arguments8['alternativeLanguageKeys'] = NULL;
$arguments8['key'] = 'backendUserListing';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return '
        Listing of users on compare list
    ';
};
$arguments10 = array();

$output7 .= NULL;

$output7 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
        <h3>';
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
$arguments18['key'] = 'section.compare';
$arguments18['default'] = 'Compare';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output17 .= '</h3>
        <div class="table-fit">
            <table id="typo3-backend-user-list-compare" class="table table-hover">
                <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                        <tr>
                            <td>
                                <a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array24)]);

$output23 .= '" title="id=';
$array25 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array25)]);

$output23 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['backendUser'] = 0;
$arguments26['size'] = 32;
$arguments26['showIcon'] = false;
$array28 = array (
);$arguments26['backendUser'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array28);
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array29['0'] = 'TRUE';

$expression30 = function($context) {return TRUE;};
$arguments26['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);

$output23 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output23 .= '
                                </a>
                            </td>
                            <td class="col-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                                    <b>';
$array35 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.username', $array35)]);

$output34 .= '</b>
                                ';
return $output34;
};
$arguments31 = array();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['aria'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['uid'] = NULL;
$arguments31['table'] = NULL;
$arguments31['fields'] = NULL;
$arguments31['returnUrl'] = '';
$arguments31['table'] = 'be_users';
$array33 = array (
);$arguments31['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array33);
$arguments31['title'] = 'edit';

$output23 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output23 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                                    <span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['languageKey'] = NULL;
$arguments42['alternativeLanguageKeys'] = NULL;
$arguments42['key'] = 'online';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output41 .= '</span>
                                ';
return $output41;
};
$arguments36 = array();
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers.{compareUser.uid}', $array39);

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments36['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
$arguments36['__thenClosure'] = $renderChildrenClosure37;

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output23 .= '
                                <br />
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                        ';
$array54 = array (
);
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.realName', $array54)]);

$output53 .= '
                                    ';
return $output53;
};
$arguments50 = array();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['aria'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['uid'] = NULL;
$arguments50['table'] = NULL;
$arguments50['fields'] = NULL;
$arguments50['returnUrl'] = '';
$arguments50['table'] = 'be_users';
$array52 = array (
);$arguments50['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array52);
$arguments50['title'] = 'edit';

$output49 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
                                ';
return $output49;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('compareUser.realName', $array47);

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = $renderChildrenClosure45;

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output23 .= '
                            </td>
                            <td class="col-control">
                                <div class="btn-group" role="group">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['identifier'] = NULL;
$arguments61['size'] = 'small';
$arguments61['overlay'] = NULL;
$arguments61['state'] = 'default';
$arguments61['alternativeMarkupIdentifier'] = NULL;
$arguments61['identifier'] = 'actions-open';

$output60 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                                    ';
return $output60;
};
$arguments55 = array();
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['aria'] = NULL;
$arguments55['class'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$arguments55['uid'] = NULL;
$arguments55['table'] = NULL;
$arguments55['fields'] = NULL;
$arguments55['returnUrl'] = '';
$arguments55['class'] = 'btn btn-default';
$arguments55['table'] = 'be_users';
$array57 = array (
);$arguments55['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array57);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'edit';
$arguments55['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output23 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output23 .= '
                                </div>
                                <div class="btn-group" role="group">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['identifier'] = NULL;
$arguments70['size'] = 'small';
$arguments70['overlay'] = NULL;
$arguments70['state'] = 'default';
$arguments70['alternativeMarkupIdentifier'] = NULL;
$arguments70['identifier'] = 'actions-remove';

$output69 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
                                    ';
return $output69;
};
$arguments63 = array();
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['aria'] = NULL;
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['name'] = NULL;
$arguments63['rel'] = NULL;
$arguments63['rev'] = NULL;
$arguments63['target'] = NULL;
$arguments63['action'] = NULL;
$arguments63['controller'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['pluginName'] = NULL;
$arguments63['pageUid'] = NULL;
$arguments63['pageType'] = NULL;
$arguments63['noCache'] = NULL;
$arguments63['noCacheHash'] = NULL;
$arguments63['section'] = NULL;
$arguments63['format'] = NULL;
$arguments63['linkAccessRestrictedPages'] = NULL;
$arguments63['additionalParams'] = NULL;
$arguments63['absolute'] = NULL;
$arguments63['addQueryString'] = NULL;
$arguments63['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments63['addQueryStringMethod'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['action'] = 'removeFromCompareList';
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array66);
$arguments63['arguments'] = $array65;
$arguments63['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$arguments67['key'] = 'remove';
$arguments63['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output23 .= '
                                </div>
                            </td>
                        </tr>
                    ';
return $output23;
};
$arguments20 = array();
$arguments20['each'] = NULL;
$arguments20['as'] = NULL;
$arguments20['key'] = NULL;
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$array22 = array (
);$arguments20['each'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array22);
$arguments20['as'] = 'compareUser';

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
                </tbody>
            </table>
        </div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['languageKey'] = NULL;
$arguments76['alternativeLanguageKeys'] = NULL;
$arguments76['key'] = 'compareUserList';
$arguments76['default'] = 'Compare user list';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);
};
$arguments72 = array();
$arguments72['additionalAttributes'] = NULL;
$arguments72['data'] = NULL;
$arguments72['aria'] = NULL;
$arguments72['class'] = NULL;
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$arguments72['name'] = NULL;
$arguments72['rel'] = NULL;
$arguments72['rev'] = NULL;
$arguments72['target'] = NULL;
$arguments72['action'] = NULL;
$arguments72['controller'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['pluginName'] = NULL;
$arguments72['pageUid'] = NULL;
$arguments72['pageType'] = NULL;
$arguments72['noCache'] = NULL;
$arguments72['noCacheHash'] = NULL;
$arguments72['section'] = NULL;
$arguments72['format'] = NULL;
$arguments72['linkAccessRestrictedPages'] = NULL;
$arguments72['additionalParams'] = NULL;
$arguments72['absolute'] = NULL;
$arguments72['addQueryString'] = NULL;
$arguments72['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments72['addQueryStringMethod'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['action'] = 'compare';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['key'] = NULL;
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['languageKey'] = NULL;
$arguments74['alternativeLanguageKeys'] = NULL;
$arguments74['key'] = 'compareUserList';
$arguments74['default'] = 'Compare user list';
$arguments72['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);
$arguments72['class'] = 'compare btn btn-default';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output17 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output80 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['identifier'] = NULL;
$arguments81['size'] = 'small';
$arguments81['overlay'] = NULL;
$arguments81['state'] = 'default';
$arguments81['alternativeMarkupIdentifier'] = NULL;
$arguments81['identifier'] = 'actions-selection-delete';

$output80 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['key'] = NULL;
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['languageKey'] = NULL;
$arguments83['alternativeLanguageKeys'] = NULL;
$arguments83['key'] = 'clearCompareList';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);
return $output80;
};
$arguments78 = array();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['aria'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['name'] = NULL;
$arguments78['rel'] = NULL;
$arguments78['rev'] = NULL;
$arguments78['target'] = NULL;
$arguments78['action'] = NULL;
$arguments78['controller'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['pluginName'] = NULL;
$arguments78['pageUid'] = NULL;
$arguments78['pageType'] = NULL;
$arguments78['noCache'] = NULL;
$arguments78['noCacheHash'] = NULL;
$arguments78['section'] = NULL;
$arguments78['format'] = NULL;
$arguments78['linkAccessRestrictedPages'] = NULL;
$arguments78['additionalParams'] = NULL;
$arguments78['absolute'] = NULL;
$arguments78['addQueryString'] = NULL;
$arguments78['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments78['addQueryStringMethod'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['action'] = 'removeAllFromCompareList';
$arguments78['class'] = 'btn btn-default';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output17 .= '
        <hr>
    ';
return $output17;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array15);

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output7 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['section'] = NULL;
$arguments85['partial'] = NULL;
$arguments85['delegate'] = NULL;
$arguments85['renderable'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['optional'] = false;
$arguments85['default'] = NULL;
$arguments85['contentAs'] = NULL;
$arguments85['debug'] = true;
$arguments85['partial'] = 'Filters/BackendUser/Index';
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array88);
$array89 = array (
);$array87['backendUserGroups'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroups', $array89);
$arguments85['arguments'] = $array87;

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output7 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['section'] = NULL;
$arguments90['partial'] = NULL;
$arguments90['delegate'] = NULL;
$arguments90['renderable'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['optional'] = false;
$arguments90['default'] = NULL;
$arguments90['contentAs'] = NULL;
$arguments90['debug'] = true;
$arguments90['partial'] = 'BackendUser/PaginatedListWidget';
$arguments90['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output7 .= '

';

return $output7;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output93 = '';

$output93 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['name'] = NULL;
$arguments94['name'] = 'Default';

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output93 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['icon'] = NULL;
$arguments99['title'] = NULL;
$arguments99['disabled'] = false;
$arguments99['showLabel'] = false;
$arguments99['position'] = NULL;
$arguments99['group'] = NULL;
$arguments99['link'] = NULL;
$arguments99['icon'] = 'actions-add';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['key'] = NULL;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['languageKey'] = NULL;
$arguments101['alternativeLanguageKeys'] = NULL;
$arguments101['id'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:newRecordGeneral';
$arguments99['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['uid'] = NULL;
$arguments103['pid'] = NULL;
$arguments103['table'] = NULL;
$arguments103['returnUrl'] = '';
$arguments103['table'] = 'be_users';
$arguments99['link'] = TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output98 .= '
';
return $output98;
};
$arguments96 = array();
$arguments96['name'] = NULL;
$arguments96['name'] = 'Buttons';

$output93 .= NULL;

$output93 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['key'] = NULL;
$arguments108['id'] = NULL;
$arguments108['default'] = NULL;
$arguments108['arguments'] = NULL;
$arguments108['extensionName'] = NULL;
$arguments108['languageKey'] = NULL;
$arguments108['alternativeLanguageKeys'] = NULL;
$arguments108['key'] = 'backendUserListing';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output107 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return '
        Listing of users on compare list
    ';
};
$arguments110 = array();

$output107 .= NULL;

$output107 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
        <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['languageKey'] = NULL;
$arguments118['alternativeLanguageKeys'] = NULL;
$arguments118['key'] = 'section.compare';
$arguments118['default'] = 'Compare';

$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext)]);

$output117 .= '</h3>
        <div class="table-fit">
            <table id="typo3-backend-user-list-compare" class="table table-hover">
                <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
                        <tr>
                            <td>
                                <a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array124 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array124)]);

$output123 .= '" title="id=';
$array125 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array125)]);

$output123 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['backendUser'] = 0;
$arguments126['size'] = 32;
$arguments126['showIcon'] = false;
$array128 = array (
);$arguments126['backendUser'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array128);
// Rendering Boolean node
// Rendering Array
$array129 = array();
$array129['0'] = 'TRUE';

$expression130 = function($context) {return TRUE;};
$arguments126['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);

$output123 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output123 .= '
                                </a>
                            </td>
                            <td class="col-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                                    <b>';
$array135 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.username', $array135)]);

$output134 .= '</b>
                                ';
return $output134;
};
$arguments131 = array();
$arguments131['additionalAttributes'] = NULL;
$arguments131['data'] = NULL;
$arguments131['aria'] = NULL;
$arguments131['class'] = NULL;
$arguments131['dir'] = NULL;
$arguments131['id'] = NULL;
$arguments131['lang'] = NULL;
$arguments131['style'] = NULL;
$arguments131['title'] = NULL;
$arguments131['accesskey'] = NULL;
$arguments131['tabindex'] = NULL;
$arguments131['onclick'] = NULL;
$arguments131['uid'] = NULL;
$arguments131['table'] = NULL;
$arguments131['fields'] = NULL;
$arguments131['returnUrl'] = '';
$arguments131['table'] = 'be_users';
$array133 = array (
);$arguments131['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array133);
$arguments131['title'] = 'edit';

$output123 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output123 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
                                    <span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['languageKey'] = NULL;
$arguments142['alternativeLanguageKeys'] = NULL;
$arguments142['key'] = 'online';

$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext)]);

$output141 .= '</span>
                                ';
return $output141;
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers.{compareUser.uid}', $array139);

$expression140 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$arguments136['__thenClosure'] = $renderChildrenClosure137;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output123 .= '
                                <br />
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                                        ';
$array154 = array (
);
$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.realName', $array154)]);

$output153 .= '
                                    ';
return $output153;
};
$arguments150 = array();
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['aria'] = NULL;
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['uid'] = NULL;
$arguments150['table'] = NULL;
$arguments150['fields'] = NULL;
$arguments150['returnUrl'] = '';
$arguments150['table'] = 'be_users';
$array152 = array (
);$arguments150['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array152);
$arguments150['title'] = 'edit';

$output149 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
                                ';
return $output149;
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('compareUser.realName', $array147);

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = $renderChildrenClosure145;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output123 .= '
                            </td>
                            <td class="col-control">
                                <div class="btn-group" role="group">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['identifier'] = NULL;
$arguments161['size'] = 'small';
$arguments161['overlay'] = NULL;
$arguments161['state'] = 'default';
$arguments161['alternativeMarkupIdentifier'] = NULL;
$arguments161['identifier'] = 'actions-open';

$output160 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
                                    ';
return $output160;
};
$arguments155 = array();
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['aria'] = NULL;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['uid'] = NULL;
$arguments155['table'] = NULL;
$arguments155['fields'] = NULL;
$arguments155['returnUrl'] = '';
$arguments155['class'] = 'btn btn-default';
$arguments155['table'] = 'be_users';
$array157 = array (
);$arguments155['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array157);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'edit';
$arguments155['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output123 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output123 .= '
                                </div>
                                <div class="btn-group" role="group">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['identifier'] = NULL;
$arguments170['size'] = 'small';
$arguments170['overlay'] = NULL;
$arguments170['state'] = 'default';
$arguments170['alternativeMarkupIdentifier'] = NULL;
$arguments170['identifier'] = 'actions-remove';

$output169 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output169 .= '
                                    ';
return $output169;
};
$arguments163 = array();
$arguments163['additionalAttributes'] = NULL;
$arguments163['data'] = NULL;
$arguments163['aria'] = NULL;
$arguments163['class'] = NULL;
$arguments163['dir'] = NULL;
$arguments163['id'] = NULL;
$arguments163['lang'] = NULL;
$arguments163['style'] = NULL;
$arguments163['title'] = NULL;
$arguments163['accesskey'] = NULL;
$arguments163['tabindex'] = NULL;
$arguments163['onclick'] = NULL;
$arguments163['name'] = NULL;
$arguments163['rel'] = NULL;
$arguments163['rev'] = NULL;
$arguments163['target'] = NULL;
$arguments163['action'] = NULL;
$arguments163['controller'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['pluginName'] = NULL;
$arguments163['pageUid'] = NULL;
$arguments163['pageType'] = NULL;
$arguments163['noCache'] = NULL;
$arguments163['noCacheHash'] = NULL;
$arguments163['section'] = NULL;
$arguments163['format'] = NULL;
$arguments163['linkAccessRestrictedPages'] = NULL;
$arguments163['additionalParams'] = NULL;
$arguments163['absolute'] = NULL;
$arguments163['addQueryString'] = NULL;
$arguments163['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments163['addQueryStringMethod'] = NULL;
$arguments163['arguments'] = NULL;
$arguments163['action'] = 'removeFromCompareList';
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array166);
$arguments163['arguments'] = $array165;
$arguments163['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['key'] = NULL;
$arguments167['id'] = NULL;
$arguments167['default'] = NULL;
$arguments167['arguments'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['languageKey'] = NULL;
$arguments167['alternativeLanguageKeys'] = NULL;
$arguments167['key'] = 'remove';
$arguments163['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output123 .= '
                                </div>
                            </td>
                        </tr>
                    ';
return $output123;
};
$arguments120 = array();
$arguments120['each'] = NULL;
$arguments120['as'] = NULL;
$arguments120['key'] = NULL;
$arguments120['reverse'] = false;
$arguments120['iteration'] = NULL;
$array122 = array (
);$arguments120['each'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array122);
$arguments120['as'] = 'compareUser';

$output117 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output117 .= '
                </tbody>
            </table>
        </div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['key'] = NULL;
$arguments176['id'] = NULL;
$arguments176['default'] = NULL;
$arguments176['arguments'] = NULL;
$arguments176['extensionName'] = NULL;
$arguments176['languageKey'] = NULL;
$arguments176['alternativeLanguageKeys'] = NULL;
$arguments176['key'] = 'compareUserList';
$arguments176['default'] = 'Compare user list';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext)]);
};
$arguments172 = array();
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$arguments172['aria'] = NULL;
$arguments172['class'] = NULL;
$arguments172['dir'] = NULL;
$arguments172['id'] = NULL;
$arguments172['lang'] = NULL;
$arguments172['style'] = NULL;
$arguments172['title'] = NULL;
$arguments172['accesskey'] = NULL;
$arguments172['tabindex'] = NULL;
$arguments172['onclick'] = NULL;
$arguments172['name'] = NULL;
$arguments172['rel'] = NULL;
$arguments172['rev'] = NULL;
$arguments172['target'] = NULL;
$arguments172['action'] = NULL;
$arguments172['controller'] = NULL;
$arguments172['extensionName'] = NULL;
$arguments172['pluginName'] = NULL;
$arguments172['pageUid'] = NULL;
$arguments172['pageType'] = NULL;
$arguments172['noCache'] = NULL;
$arguments172['noCacheHash'] = NULL;
$arguments172['section'] = NULL;
$arguments172['format'] = NULL;
$arguments172['linkAccessRestrictedPages'] = NULL;
$arguments172['additionalParams'] = NULL;
$arguments172['absolute'] = NULL;
$arguments172['addQueryString'] = NULL;
$arguments172['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments172['addQueryStringMethod'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['action'] = 'compare';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['languageKey'] = NULL;
$arguments174['alternativeLanguageKeys'] = NULL;
$arguments174['key'] = 'compareUserList';
$arguments174['default'] = 'Compare user list';
$arguments172['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);
$arguments172['class'] = 'compare btn btn-default';

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output117 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output180 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['identifier'] = NULL;
$arguments181['size'] = 'small';
$arguments181['overlay'] = NULL;
$arguments181['state'] = 'default';
$arguments181['alternativeMarkupIdentifier'] = NULL;
$arguments181['identifier'] = 'actions-selection-delete';

$output180 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['languageKey'] = NULL;
$arguments183['alternativeLanguageKeys'] = NULL;
$arguments183['key'] = 'clearCompareList';

$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);
return $output180;
};
$arguments178 = array();
$arguments178['additionalAttributes'] = NULL;
$arguments178['data'] = NULL;
$arguments178['aria'] = NULL;
$arguments178['class'] = NULL;
$arguments178['dir'] = NULL;
$arguments178['id'] = NULL;
$arguments178['lang'] = NULL;
$arguments178['style'] = NULL;
$arguments178['title'] = NULL;
$arguments178['accesskey'] = NULL;
$arguments178['tabindex'] = NULL;
$arguments178['onclick'] = NULL;
$arguments178['name'] = NULL;
$arguments178['rel'] = NULL;
$arguments178['rev'] = NULL;
$arguments178['target'] = NULL;
$arguments178['action'] = NULL;
$arguments178['controller'] = NULL;
$arguments178['extensionName'] = NULL;
$arguments178['pluginName'] = NULL;
$arguments178['pageUid'] = NULL;
$arguments178['pageType'] = NULL;
$arguments178['noCache'] = NULL;
$arguments178['noCacheHash'] = NULL;
$arguments178['section'] = NULL;
$arguments178['format'] = NULL;
$arguments178['linkAccessRestrictedPages'] = NULL;
$arguments178['additionalParams'] = NULL;
$arguments178['absolute'] = NULL;
$arguments178['addQueryString'] = NULL;
$arguments178['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments178['addQueryStringMethod'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['action'] = 'removeAllFromCompareList';
$arguments178['class'] = 'btn btn-default';

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output117 .= '
        <hr>
    ';
return $output117;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array115);

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments112['__thenClosure'] = $renderChildrenClosure113;

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output107 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['section'] = NULL;
$arguments185['partial'] = NULL;
$arguments185['delegate'] = NULL;
$arguments185['renderable'] = NULL;
$arguments185['arguments'] = array (
);
$arguments185['optional'] = false;
$arguments185['default'] = NULL;
$arguments185['contentAs'] = NULL;
$arguments185['debug'] = true;
$arguments185['partial'] = 'Filters/BackendUser/Index';
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array188);
$array189 = array (
);$array187['backendUserGroups'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroups', $array189);
$arguments185['arguments'] = $array187;

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output107 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['section'] = NULL;
$arguments190['partial'] = NULL;
$arguments190['delegate'] = NULL;
$arguments190['renderable'] = NULL;
$arguments190['arguments'] = array (
);
$arguments190['optional'] = false;
$arguments190['default'] = NULL;
$arguments190['contentAs'] = NULL;
$arguments190['debug'] = true;
$arguments190['partial'] = 'BackendUser/PaginatedListWidget';
$arguments190['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output107 .= '

';
return $output107;
};
$arguments105 = array();
$arguments105['name'] = NULL;
$arguments105['name'] = 'Content';

$output93 .= NULL;

$output93 .= '


';

return $output93;
}


}
#