<?php

class partial_BackendUser_IndexListRow_5e57f258aec35eba01366778822c7c138cf04f69 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'bu' => 
  array (
    0 => 'TYPO3\\CMS\\Beuser\\ViewHelpers',
  ),
));
}

/**
 * section list_row
 */
public function section_e490b8b1053373d1e4badbae4af5cf284c69881a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<tr>
    <td>
        <a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array1)]);

$output0 .= '" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.description', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$output7 = '';
$array8 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.description', $array8)]);

$output7 .= ' ';
$arguments2['then'] = $output7;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '(id=';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array9)]);

$output0 .= ')">
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['backendUser'] = 0;
$arguments10['size'] = 32;
$arguments10['showIcon'] = false;
$array12 = array (
);$arguments10['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array12);
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array13['0'] = 'TRUE';

$expression14 = function($context) {return TRUE;};
$arguments10['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
        </a>
    </td>
    <td class="col-title">
        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
            <b>';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array19)]);

$output18 .= '</b>
        ';
return $output18;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['aria'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['uid'] = NULL;
$arguments15['table'] = NULL;
$arguments15['fields'] = NULL;
$arguments15['returnUrl'] = '';
$arguments15['table'] = 'be_users';
$array17 = array (
);$arguments15['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array17);
$arguments15['title'] = 'edit';

$output0 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
            <span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['key'] = NULL;
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['languageKey'] = NULL;
$arguments26['alternativeLanguageKeys'] = NULL;
$arguments26['key'] = 'online';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= '</span>
        ';
return $output25;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers.{backendUser.uid}', $array23);

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
        <br />
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                ';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array38)]);

$output37 .= '
            ';
return $output37;
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['aria'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['uid'] = NULL;
$arguments34['table'] = NULL;
$arguments34['fields'] = NULL;
$arguments34['returnUrl'] = '';
$arguments34['table'] = 'be_users';
$array36 = array (
);$arguments34['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array36);
$arguments34['title'] = 'edit';

$output33 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
        ';
return $output33;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = $renderChildrenClosure29;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
    </td>
    <td>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array63 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array63);
};
$arguments58 = array();
$arguments58['date'] = NULL;
$arguments58['format'] = '';
$arguments58['base'] = NULL;
$output60 = '';
$array61 = array (
);
$output60 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array61);

$output60 .= ' ';
$array62 = array (
);
$output60 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array62);
$arguments58['format'] = $output60;
$renderChildrenClosure59 = ($arguments58['date'] !== null) ? function() use ($arguments58) { return $arguments58['date']; } : $renderChildrenClosure59;
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= '
            ';
return $output57;
};
$arguments55 = array();

$output54 .= '';

$output54 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                ';
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
$arguments67['key'] = 'never';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output66 .= '
            ';
return $output66;
};
$arguments64 = array();
$arguments64['if'] = NULL;

$output54 .= '';

$output54 .= '
        ';
return $output54;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments39['__thenClosure'] = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$array47 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array47);
};
$arguments42 = array();
$arguments42['date'] = NULL;
$arguments42['format'] = '';
$arguments42['base'] = NULL;
$output44 = '';
$array45 = array (
);
$output44 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array45);

$output44 .= ' ';
$array46 = array (
);
$output44 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array46);
$arguments42['format'] = $output44;
$renderChildrenClosure43 = ($arguments42['date'] !== null) ? function() use ($arguments42) { return $arguments42['date']; } : $renderChildrenClosure43;
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output41 .= '
            ';
return $output41;
};
$arguments39['__elseClosures'][] = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['languageKey'] = NULL;
$arguments49['alternativeLanguageKeys'] = NULL;
$arguments49['key'] = 'never';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output48 .= '
            ';
return $output48;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output0 .= '
    </td>
    <td class="col-control">
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['identifier'] = NULL;
$arguments75['size'] = 'small';
$arguments75['overlay'] = NULL;
$arguments75['state'] = 'default';
$arguments75['alternativeMarkupIdentifier'] = NULL;
$arguments75['identifier'] = 'actions-open';

$output74 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
            ';
return $output74;
};
$arguments69 = array();
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['aria'] = NULL;
$arguments69['class'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$arguments69['uid'] = NULL;
$arguments69['table'] = NULL;
$arguments69['fields'] = NULL;
$arguments69['returnUrl'] = '';
$arguments69['class'] = 'btn btn-default';
$arguments69['table'] = 'be_users';
$array71 = array (
);$arguments69['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array71);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$arguments72['key'] = 'edit';
$arguments69['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output0 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['identifier'] = NULL;
$arguments136['size'] = 'small';
$arguments136['overlay'] = NULL;
$arguments136['state'] = 'default';
$arguments136['alternativeMarkupIdentifier'] = NULL;
$arguments136['identifier'] = 'empty-empty';

$output135 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '</span>
                ';
return $output135;
};
$arguments133 = array();

$output132 .= '';

$output132 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['route'] = NULL;
$arguments168['arguments'] = array (
);
$arguments168['query'] = NULL;
$arguments168['currentUrlParameterName'] = NULL;
$arguments168['route'] = 'tce_db';
$output170 = '';

$output170 .= 'data[be_users][';
$array171 = array (
);
$output170 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array171);

$output170 .= '][disable]=0';
$arguments168['query'] = $output170;
$arguments168['currentUrlParameterName'] = 'redirect';

$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output167 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['key'] = NULL;
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$arguments172['languageKey'] = NULL;
$arguments172['alternativeLanguageKeys'] = NULL;
$arguments172['key'] = 'visibility.unhide';

$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext)]);

$output167 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['identifier'] = NULL;
$arguments174['size'] = 'small';
$arguments174['overlay'] = NULL;
$arguments174['state'] = 'default';
$arguments174['alternativeMarkupIdentifier'] = NULL;
$arguments174['identifier'] = 'actions-edit-unhide';

$output167 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output167 .= '</a>
                        ';
return $output167;
};
$arguments165 = array();

$output164 .= '';

$output164 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['route'] = NULL;
$arguments179['arguments'] = array (
);
$arguments179['query'] = NULL;
$arguments179['currentUrlParameterName'] = NULL;
$arguments179['route'] = 'tce_db';
$output181 = '';

$output181 .= 'data[be_users][';
$array182 = array (
);
$output181 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array182);

$output181 .= '][disable]=1';
$arguments179['query'] = $output181;
$arguments179['currentUrlParameterName'] = 'redirect';

$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext)]);

$output178 .= '" title="';
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
$arguments183['key'] = 'visibility.hide';

$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output178 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['identifier'] = NULL;
$arguments185['size'] = 'small';
$arguments185['overlay'] = NULL;
$arguments185['state'] = 'default';
$arguments185['alternativeMarkupIdentifier'] = NULL;
$arguments185['identifier'] = 'actions-edit-hide';

$output178 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output178 .= '</a>
                        ';
return $output178;
};
$arguments176 = array();
$arguments176['if'] = NULL;

$output164 .= '';

$output164 .= '
                    ';
return $output164;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array162);
$array161['1'] = ' == 1';

$expression163 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments141['__thenClosure'] = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['route'] = NULL;
$arguments144['arguments'] = array (
);
$arguments144['query'] = NULL;
$arguments144['currentUrlParameterName'] = NULL;
$arguments144['route'] = 'tce_db';
$output146 = '';

$output146 .= 'data[be_users][';
$array147 = array (
);
$output146 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array147);

$output146 .= '][disable]=0';
$arguments144['query'] = $output146;
$arguments144['currentUrlParameterName'] = 'redirect';

$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext)]);

$output143 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['key'] = NULL;
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$arguments148['languageKey'] = NULL;
$arguments148['alternativeLanguageKeys'] = NULL;
$arguments148['key'] = 'visibility.unhide';

$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext)]);

$output143 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['identifier'] = NULL;
$arguments150['size'] = 'small';
$arguments150['overlay'] = NULL;
$arguments150['state'] = 'default';
$arguments150['alternativeMarkupIdentifier'] = NULL;
$arguments150['identifier'] = 'actions-edit-unhide';

$output143 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output143 .= '</a>
                        ';
return $output143;
};
$arguments141['__elseClosures'][] = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['route'] = NULL;
$arguments153['arguments'] = array (
);
$arguments153['query'] = NULL;
$arguments153['currentUrlParameterName'] = NULL;
$arguments153['route'] = 'tce_db';
$output155 = '';

$output155 .= 'data[be_users][';
$array156 = array (
);
$output155 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array156);

$output155 .= '][disable]=1';
$arguments153['query'] = $output155;
$arguments153['currentUrlParameterName'] = 'redirect';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext)]);

$output152 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['key'] = NULL;
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$arguments157['languageKey'] = NULL;
$arguments157['alternativeLanguageKeys'] = NULL;
$arguments157['key'] = 'visibility.hide';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output152 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['identifier'] = NULL;
$arguments159['size'] = 'small';
$arguments159['overlay'] = NULL;
$arguments159['state'] = 'default';
$arguments159['alternativeMarkupIdentifier'] = NULL;
$arguments159['identifier'] = 'actions-edit-hide';

$output152 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output152 .= '</a>
                        ';
return $output152;
};

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
                ';
return $output140;
};
$arguments138 = array();
$arguments138['if'] = NULL;

$output132 .= '';

$output132 .= '
            ';
return $output132;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.currentlyLoggedIn', $array130);
$array129['1'] = ' == 1';

$expression131 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['identifier'] = NULL;
$arguments80['size'] = 'small';
$arguments80['overlay'] = NULL;
$arguments80['state'] = 'default';
$arguments80['alternativeMarkupIdentifier'] = NULL;
$arguments80['identifier'] = 'empty-empty';

$output79 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '</span>
                ';
return $output79;
};
$arguments77['__elseClosures'][] = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['route'] = NULL;
$arguments110['arguments'] = array (
);
$arguments110['query'] = NULL;
$arguments110['currentUrlParameterName'] = NULL;
$arguments110['route'] = 'tce_db';
$output112 = '';

$output112 .= 'data[be_users][';
$array113 = array (
);
$output112 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array113);

$output112 .= '][disable]=0';
$arguments110['query'] = $output112;
$arguments110['currentUrlParameterName'] = 'redirect';

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output109 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['languageKey'] = NULL;
$arguments114['alternativeLanguageKeys'] = NULL;
$arguments114['key'] = 'visibility.unhide';

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output109 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['identifier'] = NULL;
$arguments116['size'] = 'small';
$arguments116['overlay'] = NULL;
$arguments116['state'] = 'default';
$arguments116['alternativeMarkupIdentifier'] = NULL;
$arguments116['identifier'] = 'actions-edit-unhide';

$output109 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output109 .= '</a>
                        ';
return $output109;
};
$arguments107 = array();

$output106 .= '';

$output106 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['route'] = NULL;
$arguments121['arguments'] = array (
);
$arguments121['query'] = NULL;
$arguments121['currentUrlParameterName'] = NULL;
$arguments121['route'] = 'tce_db';
$output123 = '';

$output123 .= 'data[be_users][';
$array124 = array (
);
$output123 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array124);

$output123 .= '][disable]=1';
$arguments121['query'] = $output123;
$arguments121['currentUrlParameterName'] = 'redirect';

$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext)]);

$output120 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['key'] = NULL;
$arguments125['id'] = NULL;
$arguments125['default'] = NULL;
$arguments125['arguments'] = NULL;
$arguments125['extensionName'] = NULL;
$arguments125['languageKey'] = NULL;
$arguments125['alternativeLanguageKeys'] = NULL;
$arguments125['key'] = 'visibility.hide';

$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output120 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['identifier'] = NULL;
$arguments127['size'] = 'small';
$arguments127['overlay'] = NULL;
$arguments127['state'] = 'default';
$arguments127['alternativeMarkupIdentifier'] = NULL;
$arguments127['identifier'] = 'actions-edit-hide';

$output120 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output120 .= '</a>
                        ';
return $output120;
};
$arguments118 = array();
$arguments118['if'] = NULL;

$output106 .= '';

$output106 .= '
                    ';
return $output106;
};
$arguments83 = array();
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$arguments83['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array104);
$array103['1'] = ' == 1';

$expression105 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments83['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments83['__thenClosure'] = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['route'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['query'] = NULL;
$arguments86['currentUrlParameterName'] = NULL;
$arguments86['route'] = 'tce_db';
$output88 = '';

$output88 .= 'data[be_users][';
$array89 = array (
);
$output88 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array89);

$output88 .= '][disable]=0';
$arguments86['query'] = $output88;
$arguments86['currentUrlParameterName'] = 'redirect';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['languageKey'] = NULL;
$arguments90['alternativeLanguageKeys'] = NULL;
$arguments90['key'] = 'visibility.unhide';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output85 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['identifier'] = NULL;
$arguments92['size'] = 'small';
$arguments92['overlay'] = NULL;
$arguments92['state'] = 'default';
$arguments92['alternativeMarkupIdentifier'] = NULL;
$arguments92['identifier'] = 'actions-edit-unhide';

$output85 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output85 .= '</a>
                        ';
return $output85;
};
$arguments83['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['route'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['query'] = NULL;
$arguments95['currentUrlParameterName'] = NULL;
$arguments95['route'] = 'tce_db';
$output97 = '';

$output97 .= 'data[be_users][';
$array98 = array (
);
$output97 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array98);

$output97 .= '][disable]=1';
$arguments95['query'] = $output97;
$arguments95['currentUrlParameterName'] = 'redirect';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output94 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['key'] = NULL;
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['languageKey'] = NULL;
$arguments99['alternativeLanguageKeys'] = NULL;
$arguments99['key'] = 'visibility.hide';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output94 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['identifier'] = NULL;
$arguments101['size'] = 'small';
$arguments101['overlay'] = NULL;
$arguments101['state'] = 'default';
$arguments101['alternativeMarkupIdentifier'] = NULL;
$arguments101['identifier'] = 'actions-edit-hide';

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output94 .= '</a>
                        ';
return $output94;
};

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
                ';
return $output82;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['identifier'] = NULL;
$arguments217['size'] = 'small';
$arguments217['overlay'] = NULL;
$arguments217['state'] = 'default';
$arguments217['alternativeMarkupIdentifier'] = NULL;
$arguments217['identifier'] = 'empty-empty';

$output216 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '</span>
                ';
return $output216;
};
$arguments214 = array();

$output213 .= '';

$output213 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
                    <a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['route'] = NULL;
$arguments222['arguments'] = array (
);
$arguments222['query'] = NULL;
$arguments222['currentUrlParameterName'] = NULL;
$arguments222['route'] = 'tce_db';
$output224 = '';

$output224 .= 'cmd[be_users][';
$array225 = array (
);
$output224 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array225);

$output224 .= '][delete]=1';
$arguments222['query'] = $output224;
$arguments222['currentUrlParameterName'] = 'redirect';

$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext)]);

$output221 .= '"
                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['key'] = NULL;
$arguments226['id'] = NULL;
$arguments226['default'] = NULL;
$arguments226['arguments'] = NULL;
$arguments226['extensionName'] = NULL;
$arguments226['languageKey'] = NULL;
$arguments226['alternativeLanguageKeys'] = NULL;
$arguments226['key'] = 'delete';

$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext)]);

$output221 .= '"
                        data-severity="warning"
                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['key'] = NULL;
$arguments228['id'] = NULL;
$arguments228['default'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['extensionName'] = NULL;
$arguments228['languageKey'] = NULL;
$arguments228['alternativeLanguageKeys'] = NULL;
$arguments228['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext)]);

$output221 .= '"
                        data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['key'] = NULL;
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$arguments230['languageKey'] = NULL;
$arguments230['alternativeLanguageKeys'] = NULL;
$arguments230['key'] = 'confirm';
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array233);
$arguments230['arguments'] = $array232;

$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output221 .= '"
                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['key'] = NULL;
$arguments234['id'] = NULL;
$arguments234['default'] = NULL;
$arguments234['arguments'] = NULL;
$arguments234['extensionName'] = NULL;
$arguments234['languageKey'] = NULL;
$arguments234['alternativeLanguageKeys'] = NULL;
$arguments234['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext)]);

$output221 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['identifier'] = NULL;
$arguments236['size'] = 'small';
$arguments236['overlay'] = NULL;
$arguments236['state'] = 'default';
$arguments236['alternativeMarkupIdentifier'] = NULL;
$arguments236['identifier'] = 'actions-edit-delete';

$output221 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output221 .= '
                    </a>
                ';
return $output221;
};
$arguments219 = array();
$arguments219['if'] = NULL;

$output213 .= '';

$output213 .= '
            ';
return $output213;
};
$arguments187 = array();
$arguments187['then'] = NULL;
$arguments187['else'] = NULL;
$arguments187['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array209 = array();
$array210 = array (
);$array209['0'] = $renderingContext->getVariableProvider()->getByPath('currentUserUid', $array210);
$array209['1'] = ' == ';
$array211 = array (
);$array209['2'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array211);

$expression212 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments187['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression212(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array209)
					),
					$renderingContext
				);
$arguments187['__thenClosure'] = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['identifier'] = NULL;
$arguments190['size'] = 'small';
$arguments190['overlay'] = NULL;
$arguments190['state'] = 'default';
$arguments190['alternativeMarkupIdentifier'] = NULL;
$arguments190['identifier'] = 'empty-empty';

$output189 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '</span>
                ';
return $output189;
};
$arguments187['__elseClosures'][] = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
                    <a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['route'] = NULL;
$arguments193['arguments'] = array (
);
$arguments193['query'] = NULL;
$arguments193['currentUrlParameterName'] = NULL;
$arguments193['route'] = 'tce_db';
$output195 = '';

$output195 .= 'cmd[be_users][';
$array196 = array (
);
$output195 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array196);

$output195 .= '][delete]=1';
$arguments193['query'] = $output195;
$arguments193['currentUrlParameterName'] = 'redirect';

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output192 .= '"
                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['key'] = NULL;
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$arguments197['languageKey'] = NULL;
$arguments197['alternativeLanguageKeys'] = NULL;
$arguments197['key'] = 'delete';

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output192 .= '"
                        data-severity="warning"
                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['key'] = NULL;
$arguments199['id'] = NULL;
$arguments199['default'] = NULL;
$arguments199['arguments'] = NULL;
$arguments199['extensionName'] = NULL;
$arguments199['languageKey'] = NULL;
$arguments199['alternativeLanguageKeys'] = NULL;
$arguments199['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext)]);

$output192 .= '"
                        data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['languageKey'] = NULL;
$arguments201['alternativeLanguageKeys'] = NULL;
$arguments201['key'] = 'confirm';
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array204);
$arguments201['arguments'] = $array203;

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output192 .= '"
                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['key'] = NULL;
$arguments205['id'] = NULL;
$arguments205['default'] = NULL;
$arguments205['arguments'] = NULL;
$arguments205['extensionName'] = NULL;
$arguments205['languageKey'] = NULL;
$arguments205['alternativeLanguageKeys'] = NULL;
$arguments205['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext)]);

$output192 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['identifier'] = NULL;
$arguments207['size'] = 'small';
$arguments207['overlay'] = NULL;
$arguments207['state'] = 'default';
$arguments207['alternativeMarkupIdentifier'] = NULL;
$arguments207['identifier'] = 'actions-edit-delete';

$output192 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output192 .= '
                    </a>
                ';
return $output192;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output0 .= '
        </div>
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['identifier'] = NULL;
$arguments285['size'] = 'small';
$arguments285['overlay'] = NULL;
$arguments285['state'] = 'default';
$arguments285['alternativeMarkupIdentifier'] = NULL;
$arguments285['identifier'] = 'actions-edit-undo';

$output284 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output284 .= '
                    ';
return $output284;
};
$arguments269 = array();
$arguments269['additionalAttributes'] = NULL;
$arguments269['data'] = NULL;
$arguments269['aria'] = NULL;
$arguments269['class'] = NULL;
$arguments269['dir'] = NULL;
$arguments269['id'] = NULL;
$arguments269['lang'] = NULL;
$arguments269['style'] = NULL;
$arguments269['title'] = NULL;
$arguments269['accesskey'] = NULL;
$arguments269['tabindex'] = NULL;
$arguments269['onclick'] = NULL;
$arguments269['name'] = NULL;
$arguments269['rel'] = NULL;
$arguments269['rev'] = NULL;
$arguments269['target'] = NULL;
$arguments269['action'] = NULL;
$arguments269['controller'] = NULL;
$arguments269['extensionName'] = NULL;
$arguments269['pluginName'] = NULL;
$arguments269['pageUid'] = NULL;
$arguments269['pageType'] = NULL;
$arguments269['noCache'] = NULL;
$arguments269['noCacheHash'] = NULL;
$arguments269['section'] = NULL;
$arguments269['format'] = NULL;
$arguments269['linkAccessRestrictedPages'] = NULL;
$arguments269['additionalParams'] = NULL;
$arguments269['absolute'] = NULL;
$arguments269['addQueryString'] = NULL;
$arguments269['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments269['addQueryStringMethod'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['class'] = 'btn btn-default t3js-modal-trigger';
$arguments269['action'] = 'initiatePasswordReset';
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['user'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array272);
$arguments269['arguments'] = $array271;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['key'] = NULL;
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$arguments273['languageKey'] = NULL;
$arguments273['alternativeLanguageKeys'] = NULL;
$arguments273['key'] = 'resetPassword.label';
$arguments269['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);
// Rendering Array
$array275 = array();
$array275['severity'] = 'warning';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['key'] = NULL;
$arguments276['id'] = NULL;
$arguments276['default'] = NULL;
$arguments276['arguments'] = NULL;
$arguments276['extensionName'] = NULL;
$arguments276['languageKey'] = NULL;
$arguments276['alternativeLanguageKeys'] = NULL;
$arguments276['key'] = 'resetPassword.confirmation.header';
$array275['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['key'] = NULL;
$arguments278['id'] = NULL;
$arguments278['default'] = NULL;
$arguments278['arguments'] = NULL;
$arguments278['extensionName'] = NULL;
$arguments278['languageKey'] = NULL;
$arguments278['alternativeLanguageKeys'] = NULL;
$arguments278['key'] = 'resetPassword.confirmation.text';
// Rendering Array
$array280 = array();
$array281 = array (
);$array280['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.email', $array281);
$arguments278['arguments'] = $array280;
$array275['content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['key'] = NULL;
$arguments282['id'] = NULL;
$arguments282['default'] = NULL;
$arguments282['arguments'] = NULL;
$arguments282['extensionName'] = NULL;
$arguments282['languageKey'] = NULL;
$arguments282['alternativeLanguageKeys'] = NULL;
$arguments282['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';
$array275['button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);
$arguments269['data'] = $array275;

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
                ';
return $output268;
};
$arguments266 = array();

$output265 .= '';

$output265 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['identifier'] = NULL;
$arguments290['size'] = 'small';
$arguments290['overlay'] = NULL;
$arguments290['state'] = 'default';
$arguments290['alternativeMarkupIdentifier'] = NULL;
$arguments290['identifier'] = 'empty-empty';

$output289 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output289 .= '</span>
                ';
return $output289;
};
$arguments287 = array();
$arguments287['if'] = NULL;

$output265 .= '';

$output265 .= '
            ';
return $output265;
};
$arguments238 = array();
$arguments238['then'] = NULL;
$arguments238['else'] = NULL;
$arguments238['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.passwordResetEnabled', $array263);

$expression264 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments238['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments238['__thenClosure'] = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments257 = array();
$arguments257['identifier'] = NULL;
$arguments257['size'] = 'small';
$arguments257['overlay'] = NULL;
$arguments257['state'] = 'default';
$arguments257['alternativeMarkupIdentifier'] = NULL;
$arguments257['identifier'] = 'actions-edit-undo';

$output256 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '
                    ';
return $output256;
};
$arguments241 = array();
$arguments241['additionalAttributes'] = NULL;
$arguments241['data'] = NULL;
$arguments241['aria'] = NULL;
$arguments241['class'] = NULL;
$arguments241['dir'] = NULL;
$arguments241['id'] = NULL;
$arguments241['lang'] = NULL;
$arguments241['style'] = NULL;
$arguments241['title'] = NULL;
$arguments241['accesskey'] = NULL;
$arguments241['tabindex'] = NULL;
$arguments241['onclick'] = NULL;
$arguments241['name'] = NULL;
$arguments241['rel'] = NULL;
$arguments241['rev'] = NULL;
$arguments241['target'] = NULL;
$arguments241['action'] = NULL;
$arguments241['controller'] = NULL;
$arguments241['extensionName'] = NULL;
$arguments241['pluginName'] = NULL;
$arguments241['pageUid'] = NULL;
$arguments241['pageType'] = NULL;
$arguments241['noCache'] = NULL;
$arguments241['noCacheHash'] = NULL;
$arguments241['section'] = NULL;
$arguments241['format'] = NULL;
$arguments241['linkAccessRestrictedPages'] = NULL;
$arguments241['additionalParams'] = NULL;
$arguments241['absolute'] = NULL;
$arguments241['addQueryString'] = NULL;
$arguments241['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments241['addQueryStringMethod'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['class'] = 'btn btn-default t3js-modal-trigger';
$arguments241['action'] = 'initiatePasswordReset';
// Rendering Array
$array243 = array();
$array244 = array (
);$array243['user'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array244);
$arguments241['arguments'] = $array243;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['key'] = NULL;
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$arguments245['languageKey'] = NULL;
$arguments245['alternativeLanguageKeys'] = NULL;
$arguments245['key'] = 'resetPassword.label';
$arguments241['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);
// Rendering Array
$array247 = array();
$array247['severity'] = 'warning';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['key'] = NULL;
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$arguments248['languageKey'] = NULL;
$arguments248['alternativeLanguageKeys'] = NULL;
$arguments248['key'] = 'resetPassword.confirmation.header';
$array247['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['key'] = NULL;
$arguments250['id'] = NULL;
$arguments250['default'] = NULL;
$arguments250['arguments'] = NULL;
$arguments250['extensionName'] = NULL;
$arguments250['languageKey'] = NULL;
$arguments250['alternativeLanguageKeys'] = NULL;
$arguments250['key'] = 'resetPassword.confirmation.text';
// Rendering Array
$array252 = array();
$array253 = array (
);$array252['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.email', $array253);
$arguments250['arguments'] = $array252;
$array247['content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['key'] = NULL;
$arguments254['id'] = NULL;
$arguments254['default'] = NULL;
$arguments254['arguments'] = NULL;
$arguments254['extensionName'] = NULL;
$arguments254['languageKey'] = NULL;
$arguments254['alternativeLanguageKeys'] = NULL;
$arguments254['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';
$array247['button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);
$arguments241['data'] = $array247;

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
                ';
return $output240;
};
$arguments238['__elseClosures'][] = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['identifier'] = NULL;
$arguments260['size'] = 'small';
$arguments260['overlay'] = NULL;
$arguments260['state'] = 'default';
$arguments260['alternativeMarkupIdentifier'] = NULL;
$arguments260['identifier'] = 'empty-empty';

$output259 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '</span>
                ';
return $output259;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['identifier'] = NULL;
$arguments299['size'] = 'small';
$arguments299['overlay'] = NULL;
$arguments299['state'] = 'default';
$arguments299['alternativeMarkupIdentifier'] = NULL;
$arguments299['identifier'] = 'actions-system-options-view';
$arguments299['size'] = 'small';

$output298 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
            ';
return $output298;
};
$arguments292 = array();
$arguments292['additionalAttributes'] = NULL;
$arguments292['data'] = NULL;
$arguments292['aria'] = NULL;
$arguments292['class'] = NULL;
$arguments292['dir'] = NULL;
$arguments292['id'] = NULL;
$arguments292['lang'] = NULL;
$arguments292['style'] = NULL;
$arguments292['title'] = NULL;
$arguments292['accesskey'] = NULL;
$arguments292['tabindex'] = NULL;
$arguments292['onclick'] = NULL;
$arguments292['name'] = NULL;
$arguments292['rel'] = NULL;
$arguments292['rev'] = NULL;
$arguments292['target'] = NULL;
$arguments292['action'] = NULL;
$arguments292['controller'] = NULL;
$arguments292['extensionName'] = NULL;
$arguments292['pluginName'] = NULL;
$arguments292['pageUid'] = NULL;
$arguments292['pageType'] = NULL;
$arguments292['noCache'] = NULL;
$arguments292['noCacheHash'] = NULL;
$arguments292['section'] = NULL;
$arguments292['format'] = NULL;
$arguments292['linkAccessRestrictedPages'] = NULL;
$arguments292['additionalParams'] = NULL;
$arguments292['absolute'] = NULL;
$arguments292['addQueryString'] = NULL;
$arguments292['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments292['addQueryStringMethod'] = NULL;
$arguments292['arguments'] = NULL;
$arguments292['action'] = 'show';
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array295);
$arguments292['arguments'] = $array294;
$arguments292['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['key'] = NULL;
$arguments296['id'] = NULL;
$arguments296['default'] = NULL;
$arguments296['arguments'] = NULL;
$arguments296['extensionName'] = NULL;
$arguments296['languageKey'] = NULL;
$arguments296['alternativeLanguageKeys'] = NULL;
$arguments296['key'] = 'details';
$arguments292['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output0 .= '
            <a class="btn btn-default" href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['key'] = NULL;
$arguments301['id'] = NULL;
$arguments301['default'] = NULL;
$arguments301['arguments'] = NULL;
$arguments301['extensionName'] = NULL;
$arguments301['languageKey'] = NULL;
$arguments301['alternativeLanguageKeys'] = NULL;
$arguments301['key'] = 'info';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext)]);

$output0 .= '" data-dispatch-action="TYPO3.InfoWindow.showItem" data-dispatch-args-list="be_users,';
$array303 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array303)]);

$output0 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['identifier'] = NULL;
$arguments304['size'] = 'small';
$arguments304['overlay'] = NULL;
$arguments304['state'] = 'default';
$arguments304['alternativeMarkupIdentifier'] = NULL;
$arguments304['identifier'] = 'actions-document-info';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output0 .= '
            </a>
        </div>
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['identifier'] = NULL;
$arguments346['size'] = 'small';
$arguments346['overlay'] = NULL;
$arguments346['state'] = 'default';
$arguments346['alternativeMarkupIdentifier'] = NULL;
$arguments346['identifier'] = 'actions-remove';
$arguments346['size'] = 'small';

$output345 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output345 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments348 = array();
$arguments348['key'] = NULL;
$arguments348['id'] = NULL;
$arguments348['default'] = NULL;
$arguments348['arguments'] = NULL;
$arguments348['extensionName'] = NULL;
$arguments348['languageKey'] = NULL;
$arguments348['alternativeLanguageKeys'] = NULL;
$arguments348['key'] = 'compare';

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext)]);

$output345 .= '
                    ';
return $output345;
};
$arguments339 = array();
$arguments339['additionalAttributes'] = NULL;
$arguments339['data'] = NULL;
$arguments339['aria'] = NULL;
$arguments339['class'] = NULL;
$arguments339['dir'] = NULL;
$arguments339['id'] = NULL;
$arguments339['lang'] = NULL;
$arguments339['style'] = NULL;
$arguments339['title'] = NULL;
$arguments339['accesskey'] = NULL;
$arguments339['tabindex'] = NULL;
$arguments339['onclick'] = NULL;
$arguments339['name'] = NULL;
$arguments339['rel'] = NULL;
$arguments339['rev'] = NULL;
$arguments339['target'] = NULL;
$arguments339['action'] = NULL;
$arguments339['controller'] = NULL;
$arguments339['extensionName'] = NULL;
$arguments339['pluginName'] = NULL;
$arguments339['pageUid'] = NULL;
$arguments339['pageType'] = NULL;
$arguments339['noCache'] = NULL;
$arguments339['noCacheHash'] = NULL;
$arguments339['section'] = NULL;
$arguments339['format'] = NULL;
$arguments339['linkAccessRestrictedPages'] = NULL;
$arguments339['additionalParams'] = NULL;
$arguments339['absolute'] = NULL;
$arguments339['addQueryString'] = NULL;
$arguments339['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments339['addQueryStringMethod'] = NULL;
$arguments339['arguments'] = NULL;
$arguments339['action'] = 'removeFromCompareList';
// Rendering Array
$array341 = array();
$array342 = array (
);$array341['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array342);
$arguments339['arguments'] = $array341;
$arguments339['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments343 = array();
$arguments343['key'] = NULL;
$arguments343['id'] = NULL;
$arguments343['default'] = NULL;
$arguments343['arguments'] = NULL;
$arguments343['extensionName'] = NULL;
$arguments343['languageKey'] = NULL;
$arguments343['alternativeLanguageKeys'] = NULL;
$arguments343['key'] = 'compare';
$arguments339['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output338 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output338 .= '
                ';
return $output338;
};
$arguments336 = array();

$output335 .= '';

$output335 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['identifier'] = NULL;
$arguments360['size'] = 'small';
$arguments360['overlay'] = NULL;
$arguments360['state'] = 'default';
$arguments360['alternativeMarkupIdentifier'] = NULL;
$arguments360['identifier'] = 'actions-add';
$arguments360['size'] = 'small';

$output359 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output359 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments362 = array();
$arguments362['key'] = NULL;
$arguments362['id'] = NULL;
$arguments362['default'] = NULL;
$arguments362['arguments'] = NULL;
$arguments362['extensionName'] = NULL;
$arguments362['languageKey'] = NULL;
$arguments362['alternativeLanguageKeys'] = NULL;
$arguments362['key'] = 'compare';

$output359 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext)]);

$output359 .= '
                    ';
return $output359;
};
$arguments353 = array();
$arguments353['additionalAttributes'] = NULL;
$arguments353['data'] = NULL;
$arguments353['aria'] = NULL;
$arguments353['class'] = NULL;
$arguments353['dir'] = NULL;
$arguments353['id'] = NULL;
$arguments353['lang'] = NULL;
$arguments353['style'] = NULL;
$arguments353['title'] = NULL;
$arguments353['accesskey'] = NULL;
$arguments353['tabindex'] = NULL;
$arguments353['onclick'] = NULL;
$arguments353['name'] = NULL;
$arguments353['rel'] = NULL;
$arguments353['rev'] = NULL;
$arguments353['target'] = NULL;
$arguments353['action'] = NULL;
$arguments353['controller'] = NULL;
$arguments353['extensionName'] = NULL;
$arguments353['pluginName'] = NULL;
$arguments353['pageUid'] = NULL;
$arguments353['pageType'] = NULL;
$arguments353['noCache'] = NULL;
$arguments353['noCacheHash'] = NULL;
$arguments353['section'] = NULL;
$arguments353['format'] = NULL;
$arguments353['linkAccessRestrictedPages'] = NULL;
$arguments353['additionalParams'] = NULL;
$arguments353['absolute'] = NULL;
$arguments353['addQueryString'] = NULL;
$arguments353['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments353['addQueryStringMethod'] = NULL;
$arguments353['arguments'] = NULL;
$arguments353['action'] = 'addToCompareList';
// Rendering Array
$array355 = array();
$array356 = array (
);$array355['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array356);
$arguments353['arguments'] = $array355;
$arguments353['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments357 = array();
$arguments357['key'] = NULL;
$arguments357['id'] = NULL;
$arguments357['default'] = NULL;
$arguments357['arguments'] = NULL;
$arguments357['extensionName'] = NULL;
$arguments357['languageKey'] = NULL;
$arguments357['alternativeLanguageKeys'] = NULL;
$arguments357['key'] = 'compare';
$arguments353['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output352 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output352 .= '
                ';
return $output352;
};
$arguments350 = array();
$arguments350['if'] = NULL;

$output335 .= '';

$output335 .= '
            ';
return $output335;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array332 = array();
$array333 = array (
);$array332['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserUidList.{backendUser.uid}', $array333);

$expression334 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression334(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array332)
					),
					$renderingContext
				);
$arguments306['__thenClosure'] = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['identifier'] = NULL;
$arguments316['size'] = 'small';
$arguments316['overlay'] = NULL;
$arguments316['state'] = 'default';
$arguments316['alternativeMarkupIdentifier'] = NULL;
$arguments316['identifier'] = 'actions-remove';
$arguments316['size'] = 'small';

$output315 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['languageKey'] = NULL;
$arguments318['alternativeLanguageKeys'] = NULL;
$arguments318['key'] = 'compare';

$output315 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext)]);

$output315 .= '
                    ';
return $output315;
};
$arguments309 = array();
$arguments309['additionalAttributes'] = NULL;
$arguments309['data'] = NULL;
$arguments309['aria'] = NULL;
$arguments309['class'] = NULL;
$arguments309['dir'] = NULL;
$arguments309['id'] = NULL;
$arguments309['lang'] = NULL;
$arguments309['style'] = NULL;
$arguments309['title'] = NULL;
$arguments309['accesskey'] = NULL;
$arguments309['tabindex'] = NULL;
$arguments309['onclick'] = NULL;
$arguments309['name'] = NULL;
$arguments309['rel'] = NULL;
$arguments309['rev'] = NULL;
$arguments309['target'] = NULL;
$arguments309['action'] = NULL;
$arguments309['controller'] = NULL;
$arguments309['extensionName'] = NULL;
$arguments309['pluginName'] = NULL;
$arguments309['pageUid'] = NULL;
$arguments309['pageType'] = NULL;
$arguments309['noCache'] = NULL;
$arguments309['noCacheHash'] = NULL;
$arguments309['section'] = NULL;
$arguments309['format'] = NULL;
$arguments309['linkAccessRestrictedPages'] = NULL;
$arguments309['additionalParams'] = NULL;
$arguments309['absolute'] = NULL;
$arguments309['addQueryString'] = NULL;
$arguments309['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments309['addQueryStringMethod'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['action'] = 'removeFromCompareList';
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array312);
$arguments309['arguments'] = $array311;
$arguments309['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['key'] = NULL;
$arguments313['id'] = NULL;
$arguments313['default'] = NULL;
$arguments313['arguments'] = NULL;
$arguments313['extensionName'] = NULL;
$arguments313['languageKey'] = NULL;
$arguments313['alternativeLanguageKeys'] = NULL;
$arguments313['key'] = 'compare';
$arguments309['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
                ';
return $output308;
};
$arguments306['__elseClosures'][] = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['identifier'] = NULL;
$arguments328['size'] = 'small';
$arguments328['overlay'] = NULL;
$arguments328['state'] = 'default';
$arguments328['alternativeMarkupIdentifier'] = NULL;
$arguments328['identifier'] = 'actions-add';
$arguments328['size'] = 'small';

$output327 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['key'] = NULL;
$arguments330['id'] = NULL;
$arguments330['default'] = NULL;
$arguments330['arguments'] = NULL;
$arguments330['extensionName'] = NULL;
$arguments330['languageKey'] = NULL;
$arguments330['alternativeLanguageKeys'] = NULL;
$arguments330['key'] = 'compare';

$output327 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext)]);

$output327 .= '
                    ';
return $output327;
};
$arguments321 = array();
$arguments321['additionalAttributes'] = NULL;
$arguments321['data'] = NULL;
$arguments321['aria'] = NULL;
$arguments321['class'] = NULL;
$arguments321['dir'] = NULL;
$arguments321['id'] = NULL;
$arguments321['lang'] = NULL;
$arguments321['style'] = NULL;
$arguments321['title'] = NULL;
$arguments321['accesskey'] = NULL;
$arguments321['tabindex'] = NULL;
$arguments321['onclick'] = NULL;
$arguments321['name'] = NULL;
$arguments321['rel'] = NULL;
$arguments321['rev'] = NULL;
$arguments321['target'] = NULL;
$arguments321['action'] = NULL;
$arguments321['controller'] = NULL;
$arguments321['extensionName'] = NULL;
$arguments321['pluginName'] = NULL;
$arguments321['pageUid'] = NULL;
$arguments321['pageType'] = NULL;
$arguments321['noCache'] = NULL;
$arguments321['noCacheHash'] = NULL;
$arguments321['section'] = NULL;
$arguments321['format'] = NULL;
$arguments321['linkAccessRestrictedPages'] = NULL;
$arguments321['additionalParams'] = NULL;
$arguments321['absolute'] = NULL;
$arguments321['addQueryString'] = NULL;
$arguments321['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments321['addQueryStringMethod'] = NULL;
$arguments321['arguments'] = NULL;
$arguments321['action'] = 'addToCompareList';
// Rendering Array
$array323 = array();
$array324 = array (
);$array323['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array324);
$arguments321['arguments'] = $array323;
$arguments321['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['key'] = NULL;
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$arguments325['languageKey'] = NULL;
$arguments325['alternativeLanguageKeys'] = NULL;
$arguments325['key'] = 'compare';
$arguments321['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output320 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output320 .= '
                ';
return $output320;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['backendUser'] = NULL;
$array366 = array (
);$arguments364['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array366);

$output0 .= TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output0 .= '
        </div>
    </td>
</tr>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output367 = '';

$output367 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
    xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers"
    xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers"
    xmlns:bu="http://typo3.org/ns/TYPO3/CMS/Beuser/ViewHelpers">

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output370 = '';

$output370 .= '
<tr>
    <td>
        <a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array371 = array (
);
$output370 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array371)]);

$output370 .= '" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments372 = array();
$arguments372['then'] = NULL;
$arguments372['else'] = NULL;
$arguments372['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array374 = array();
$array375 = array (
);$array374['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.description', $array375);

$expression376 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments372['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression376(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array374)
					),
					$renderingContext
				);
$output377 = '';
$array378 = array (
);
$output377 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.description', $array378)]);

$output377 .= ' ';
$arguments372['then'] = $output377;

$output370 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output370 .= '(id=';
$array379 = array (
);
$output370 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array379)]);

$output370 .= ')">
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments380 = array();
$arguments380['backendUser'] = 0;
$arguments380['size'] = 32;
$arguments380['showIcon'] = false;
$array382 = array (
);$arguments380['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array382);
// Rendering Boolean node
// Rendering Array
$array383 = array();
$array383['0'] = 'TRUE';

$expression384 = function($context) {return TRUE;};
$arguments380['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression384(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array383)
					),
					$renderingContext
				);

$output370 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output370 .= '
        </a>
    </td>
    <td class="col-title">
        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output388 = '';

$output388 .= '
            <b>';
$array389 = array (
);
$output388 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array389)]);

$output388 .= '</b>
        ';
return $output388;
};
$arguments385 = array();
$arguments385['additionalAttributes'] = NULL;
$arguments385['data'] = NULL;
$arguments385['aria'] = NULL;
$arguments385['class'] = NULL;
$arguments385['dir'] = NULL;
$arguments385['id'] = NULL;
$arguments385['lang'] = NULL;
$arguments385['style'] = NULL;
$arguments385['title'] = NULL;
$arguments385['accesskey'] = NULL;
$arguments385['tabindex'] = NULL;
$arguments385['onclick'] = NULL;
$arguments385['uid'] = NULL;
$arguments385['table'] = NULL;
$arguments385['fields'] = NULL;
$arguments385['returnUrl'] = '';
$arguments385['table'] = 'be_users';
$array387 = array (
);$arguments385['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array387);
$arguments385['title'] = 'edit';

$output370 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output370 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
            <span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['key'] = NULL;
$arguments396['id'] = NULL;
$arguments396['default'] = NULL;
$arguments396['arguments'] = NULL;
$arguments396['extensionName'] = NULL;
$arguments396['languageKey'] = NULL;
$arguments396['alternativeLanguageKeys'] = NULL;
$arguments396['key'] = 'online';

$output395 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext)]);

$output395 .= '</span>
        ';
return $output395;
};
$arguments390 = array();
$arguments390['then'] = NULL;
$arguments390['else'] = NULL;
$arguments390['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array392 = array();
$array393 = array (
);$array392['0'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers.{backendUser.uid}', $array393);

$expression394 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments390['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression394(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array392)
					),
					$renderingContext
				);
$arguments390['__thenClosure'] = $renderChildrenClosure391;

$output370 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output370 .= '
        <br />
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$output403 = '';

$output403 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output407 = '';

$output407 .= '
                ';
$array408 = array (
);
$output407 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array408)]);

$output407 .= '
            ';
return $output407;
};
$arguments404 = array();
$arguments404['additionalAttributes'] = NULL;
$arguments404['data'] = NULL;
$arguments404['aria'] = NULL;
$arguments404['class'] = NULL;
$arguments404['dir'] = NULL;
$arguments404['id'] = NULL;
$arguments404['lang'] = NULL;
$arguments404['style'] = NULL;
$arguments404['title'] = NULL;
$arguments404['accesskey'] = NULL;
$arguments404['tabindex'] = NULL;
$arguments404['onclick'] = NULL;
$arguments404['uid'] = NULL;
$arguments404['table'] = NULL;
$arguments404['fields'] = NULL;
$arguments404['returnUrl'] = '';
$arguments404['table'] = 'be_users';
$array406 = array (
);$arguments404['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array406);
$arguments404['title'] = 'edit';

$output403 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output403 .= '
        ';
return $output403;
};
$arguments398 = array();
$arguments398['then'] = NULL;
$arguments398['else'] = NULL;
$arguments398['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array400 = array();
$array401 = array (
);$array400['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array401);

$expression402 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments398['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression402(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array400)
					),
					$renderingContext
				);
$arguments398['__thenClosure'] = $renderChildrenClosure399;

$output370 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output370 .= '
    </td>
    <td>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
$array433 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array433);
};
$arguments428 = array();
$arguments428['date'] = NULL;
$arguments428['format'] = '';
$arguments428['base'] = NULL;
$output430 = '';
$array431 = array (
);
$output430 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array431);

$output430 .= ' ';
$array432 = array (
);
$output430 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array432);
$arguments428['format'] = $output430;
$renderChildrenClosure429 = ($arguments428['date'] !== null) ? function() use ($arguments428) { return $arguments428['date']; } : $renderChildrenClosure429;
$output427 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext)]);

$output427 .= '
            ';
return $output427;
};
$arguments425 = array();

$output424 .= '';

$output424 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
$output436 = '';

$output436 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments437 = array();
$arguments437['key'] = NULL;
$arguments437['id'] = NULL;
$arguments437['default'] = NULL;
$arguments437['arguments'] = NULL;
$arguments437['extensionName'] = NULL;
$arguments437['languageKey'] = NULL;
$arguments437['alternativeLanguageKeys'] = NULL;
$arguments437['key'] = 'never';

$output436 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext)]);

$output436 .= '
            ';
return $output436;
};
$arguments434 = array();
$arguments434['if'] = NULL;

$output424 .= '';

$output424 .= '
        ';
return $output424;
};
$arguments409 = array();
$arguments409['then'] = NULL;
$arguments409['else'] = NULL;
$arguments409['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array421 = array();
$array422 = array (
);$array421['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array422);

$expression423 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments409['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression423(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array421)
					),
					$renderingContext
				);
$arguments409['__thenClosure'] = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$array417 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array417);
};
$arguments412 = array();
$arguments412['date'] = NULL;
$arguments412['format'] = '';
$arguments412['base'] = NULL;
$output414 = '';
$array415 = array (
);
$output414 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array415);

$output414 .= ' ';
$array416 = array (
);
$output414 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array416);
$arguments412['format'] = $output414;
$renderChildrenClosure413 = ($arguments412['date'] !== null) ? function() use ($arguments412) { return $arguments412['date']; } : $renderChildrenClosure413;
$output411 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext)]);

$output411 .= '
            ';
return $output411;
};
$arguments409['__elseClosures'][] = function() use ($renderingContext, $self) {
$output418 = '';

$output418 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments419 = array();
$arguments419['key'] = NULL;
$arguments419['id'] = NULL;
$arguments419['default'] = NULL;
$arguments419['arguments'] = NULL;
$arguments419['extensionName'] = NULL;
$arguments419['languageKey'] = NULL;
$arguments419['alternativeLanguageKeys'] = NULL;
$arguments419['key'] = 'never';

$output418 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext)]);

$output418 .= '
            ';
return $output418;
};

$output370 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output370 .= '
    </td>
    <td class="col-control">
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments445 = array();
$arguments445['identifier'] = NULL;
$arguments445['size'] = 'small';
$arguments445['overlay'] = NULL;
$arguments445['state'] = 'default';
$arguments445['alternativeMarkupIdentifier'] = NULL;
$arguments445['identifier'] = 'actions-open';

$output444 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output444 .= '
            ';
return $output444;
};
$arguments439 = array();
$arguments439['additionalAttributes'] = NULL;
$arguments439['data'] = NULL;
$arguments439['aria'] = NULL;
$arguments439['class'] = NULL;
$arguments439['dir'] = NULL;
$arguments439['id'] = NULL;
$arguments439['lang'] = NULL;
$arguments439['style'] = NULL;
$arguments439['title'] = NULL;
$arguments439['accesskey'] = NULL;
$arguments439['tabindex'] = NULL;
$arguments439['onclick'] = NULL;
$arguments439['uid'] = NULL;
$arguments439['table'] = NULL;
$arguments439['fields'] = NULL;
$arguments439['returnUrl'] = '';
$arguments439['class'] = 'btn btn-default';
$arguments439['table'] = 'be_users';
$array441 = array (
);$arguments439['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array441);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments442 = array();
$arguments442['key'] = NULL;
$arguments442['id'] = NULL;
$arguments442['default'] = NULL;
$arguments442['arguments'] = NULL;
$arguments442['extensionName'] = NULL;
$arguments442['languageKey'] = NULL;
$arguments442['alternativeLanguageKeys'] = NULL;
$arguments442['key'] = 'edit';
$arguments439['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output370 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output370 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
$output505 = '';

$output505 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments506 = array();
$arguments506['identifier'] = NULL;
$arguments506['size'] = 'small';
$arguments506['overlay'] = NULL;
$arguments506['state'] = 'default';
$arguments506['alternativeMarkupIdentifier'] = NULL;
$arguments506['identifier'] = 'empty-empty';

$output505 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);

$output505 .= '</span>
                ';
return $output505;
};
$arguments503 = array();

$output502 .= '';

$output502 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output510 = '';

$output510 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
$output534 = '';

$output534 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
$output537 = '';

$output537 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure539 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments538 = array();
$arguments538['route'] = NULL;
$arguments538['arguments'] = array (
);
$arguments538['query'] = NULL;
$arguments538['currentUrlParameterName'] = NULL;
$arguments538['route'] = 'tce_db';
$output540 = '';

$output540 .= 'data[be_users][';
$array541 = array (
);
$output540 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array541);

$output540 .= '][disable]=0';
$arguments538['query'] = $output540;
$arguments538['currentUrlParameterName'] = 'redirect';

$output537 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext)]);

$output537 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments542 = array();
$arguments542['key'] = NULL;
$arguments542['id'] = NULL;
$arguments542['default'] = NULL;
$arguments542['arguments'] = NULL;
$arguments542['extensionName'] = NULL;
$arguments542['languageKey'] = NULL;
$arguments542['alternativeLanguageKeys'] = NULL;
$arguments542['key'] = 'visibility.unhide';

$output537 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext)]);

$output537 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['identifier'] = NULL;
$arguments544['size'] = 'small';
$arguments544['overlay'] = NULL;
$arguments544['state'] = 'default';
$arguments544['alternativeMarkupIdentifier'] = NULL;
$arguments544['identifier'] = 'actions-edit-unhide';

$output537 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);

$output537 .= '</a>
                        ';
return $output537;
};
$arguments535 = array();

$output534 .= '';

$output534 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output548 = '';

$output548 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['route'] = NULL;
$arguments549['arguments'] = array (
);
$arguments549['query'] = NULL;
$arguments549['currentUrlParameterName'] = NULL;
$arguments549['route'] = 'tce_db';
$output551 = '';

$output551 .= 'data[be_users][';
$array552 = array (
);
$output551 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array552);

$output551 .= '][disable]=1';
$arguments549['query'] = $output551;
$arguments549['currentUrlParameterName'] = 'redirect';

$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext)]);

$output548 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments553 = array();
$arguments553['key'] = NULL;
$arguments553['id'] = NULL;
$arguments553['default'] = NULL;
$arguments553['arguments'] = NULL;
$arguments553['extensionName'] = NULL;
$arguments553['languageKey'] = NULL;
$arguments553['alternativeLanguageKeys'] = NULL;
$arguments553['key'] = 'visibility.hide';

$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext)]);

$output548 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments555 = array();
$arguments555['identifier'] = NULL;
$arguments555['size'] = 'small';
$arguments555['overlay'] = NULL;
$arguments555['state'] = 'default';
$arguments555['alternativeMarkupIdentifier'] = NULL;
$arguments555['identifier'] = 'actions-edit-hide';

$output548 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext);

$output548 .= '</a>
                        ';
return $output548;
};
$arguments546 = array();
$arguments546['if'] = NULL;

$output534 .= '';

$output534 .= '
                    ';
return $output534;
};
$arguments511 = array();
$arguments511['then'] = NULL;
$arguments511['else'] = NULL;
$arguments511['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array531 = array();
$array532 = array (
);$array531['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array532);
$array531['1'] = ' == 1';

$expression533 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments511['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression533(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array531)
					),
					$renderingContext
				);
$arguments511['__thenClosure'] = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments514 = array();
$arguments514['route'] = NULL;
$arguments514['arguments'] = array (
);
$arguments514['query'] = NULL;
$arguments514['currentUrlParameterName'] = NULL;
$arguments514['route'] = 'tce_db';
$output516 = '';

$output516 .= 'data[be_users][';
$array517 = array (
);
$output516 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array517);

$output516 .= '][disable]=0';
$arguments514['query'] = $output516;
$arguments514['currentUrlParameterName'] = 'redirect';

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext)]);

$output513 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments518 = array();
$arguments518['key'] = NULL;
$arguments518['id'] = NULL;
$arguments518['default'] = NULL;
$arguments518['arguments'] = NULL;
$arguments518['extensionName'] = NULL;
$arguments518['languageKey'] = NULL;
$arguments518['alternativeLanguageKeys'] = NULL;
$arguments518['key'] = 'visibility.unhide';

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext)]);

$output513 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['identifier'] = NULL;
$arguments520['size'] = 'small';
$arguments520['overlay'] = NULL;
$arguments520['state'] = 'default';
$arguments520['alternativeMarkupIdentifier'] = NULL;
$arguments520['identifier'] = 'actions-edit-unhide';

$output513 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output513 .= '</a>
                        ';
return $output513;
};
$arguments511['__elseClosures'][] = function() use ($renderingContext, $self) {
$output522 = '';

$output522 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments523 = array();
$arguments523['route'] = NULL;
$arguments523['arguments'] = array (
);
$arguments523['query'] = NULL;
$arguments523['currentUrlParameterName'] = NULL;
$arguments523['route'] = 'tce_db';
$output525 = '';

$output525 .= 'data[be_users][';
$array526 = array (
);
$output525 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array526);

$output525 .= '][disable]=1';
$arguments523['query'] = $output525;
$arguments523['currentUrlParameterName'] = 'redirect';

$output522 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext)]);

$output522 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments527 = array();
$arguments527['key'] = NULL;
$arguments527['id'] = NULL;
$arguments527['default'] = NULL;
$arguments527['arguments'] = NULL;
$arguments527['extensionName'] = NULL;
$arguments527['languageKey'] = NULL;
$arguments527['alternativeLanguageKeys'] = NULL;
$arguments527['key'] = 'visibility.hide';

$output522 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext)]);

$output522 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments529 = array();
$arguments529['identifier'] = NULL;
$arguments529['size'] = 'small';
$arguments529['overlay'] = NULL;
$arguments529['state'] = 'default';
$arguments529['alternativeMarkupIdentifier'] = NULL;
$arguments529['identifier'] = 'actions-edit-hide';

$output522 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output522 .= '</a>
                        ';
return $output522;
};

$output510 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);

$output510 .= '
                ';
return $output510;
};
$arguments508 = array();
$arguments508['if'] = NULL;

$output502 .= '';

$output502 .= '
            ';
return $output502;
};
$arguments447 = array();
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$arguments447['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array499 = array();
$array500 = array (
);$array499['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.currentlyLoggedIn', $array500);
$array499['1'] = ' == 1';

$expression501 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments447['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression501(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array499)
					),
					$renderingContext
				);
$arguments447['__thenClosure'] = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['identifier'] = NULL;
$arguments450['size'] = 'small';
$arguments450['overlay'] = NULL;
$arguments450['state'] = 'default';
$arguments450['alternativeMarkupIdentifier'] = NULL;
$arguments450['identifier'] = 'empty-empty';

$output449 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '</span>
                ';
return $output449;
};
$arguments447['__elseClosures'][] = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output476 = '';

$output476 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
$output479 = '';

$output479 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['route'] = NULL;
$arguments480['arguments'] = array (
);
$arguments480['query'] = NULL;
$arguments480['currentUrlParameterName'] = NULL;
$arguments480['route'] = 'tce_db';
$output482 = '';

$output482 .= 'data[be_users][';
$array483 = array (
);
$output482 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array483);

$output482 .= '][disable]=0';
$arguments480['query'] = $output482;
$arguments480['currentUrlParameterName'] = 'redirect';

$output479 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext)]);

$output479 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments484 = array();
$arguments484['key'] = NULL;
$arguments484['id'] = NULL;
$arguments484['default'] = NULL;
$arguments484['arguments'] = NULL;
$arguments484['extensionName'] = NULL;
$arguments484['languageKey'] = NULL;
$arguments484['alternativeLanguageKeys'] = NULL;
$arguments484['key'] = 'visibility.unhide';

$output479 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext)]);

$output479 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['identifier'] = NULL;
$arguments486['size'] = 'small';
$arguments486['overlay'] = NULL;
$arguments486['state'] = 'default';
$arguments486['alternativeMarkupIdentifier'] = NULL;
$arguments486['identifier'] = 'actions-edit-unhide';

$output479 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output479 .= '</a>
                        ';
return $output479;
};
$arguments477 = array();

$output476 .= '';

$output476 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['route'] = NULL;
$arguments491['arguments'] = array (
);
$arguments491['query'] = NULL;
$arguments491['currentUrlParameterName'] = NULL;
$arguments491['route'] = 'tce_db';
$output493 = '';

$output493 .= 'data[be_users][';
$array494 = array (
);
$output493 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array494);

$output493 .= '][disable]=1';
$arguments491['query'] = $output493;
$arguments491['currentUrlParameterName'] = 'redirect';

$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext)]);

$output490 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments495 = array();
$arguments495['key'] = NULL;
$arguments495['id'] = NULL;
$arguments495['default'] = NULL;
$arguments495['arguments'] = NULL;
$arguments495['extensionName'] = NULL;
$arguments495['languageKey'] = NULL;
$arguments495['alternativeLanguageKeys'] = NULL;
$arguments495['key'] = 'visibility.hide';

$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext)]);

$output490 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments497 = array();
$arguments497['identifier'] = NULL;
$arguments497['size'] = 'small';
$arguments497['overlay'] = NULL;
$arguments497['state'] = 'default';
$arguments497['alternativeMarkupIdentifier'] = NULL;
$arguments497['identifier'] = 'actions-edit-hide';

$output490 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);

$output490 .= '</a>
                        ';
return $output490;
};
$arguments488 = array();
$arguments488['if'] = NULL;

$output476 .= '';

$output476 .= '
                    ';
return $output476;
};
$arguments453 = array();
$arguments453['then'] = NULL;
$arguments453['else'] = NULL;
$arguments453['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array473 = array();
$array474 = array (
);$array473['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array474);
$array473['1'] = ' == 1';

$expression475 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments453['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression475(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array473)
					),
					$renderingContext
				);
$arguments453['__thenClosure'] = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['route'] = NULL;
$arguments456['arguments'] = array (
);
$arguments456['query'] = NULL;
$arguments456['currentUrlParameterName'] = NULL;
$arguments456['route'] = 'tce_db';
$output458 = '';

$output458 .= 'data[be_users][';
$array459 = array (
);
$output458 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array459);

$output458 .= '][disable]=0';
$arguments456['query'] = $output458;
$arguments456['currentUrlParameterName'] = 'redirect';

$output455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext)]);

$output455 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['key'] = NULL;
$arguments460['id'] = NULL;
$arguments460['default'] = NULL;
$arguments460['arguments'] = NULL;
$arguments460['extensionName'] = NULL;
$arguments460['languageKey'] = NULL;
$arguments460['alternativeLanguageKeys'] = NULL;
$arguments460['key'] = 'visibility.unhide';

$output455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext)]);

$output455 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['identifier'] = NULL;
$arguments462['size'] = 'small';
$arguments462['overlay'] = NULL;
$arguments462['state'] = 'default';
$arguments462['alternativeMarkupIdentifier'] = NULL;
$arguments462['identifier'] = 'actions-edit-unhide';

$output455 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output455 .= '</a>
                        ';
return $output455;
};
$arguments453['__elseClosures'][] = function() use ($renderingContext, $self) {
$output464 = '';

$output464 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['route'] = NULL;
$arguments465['arguments'] = array (
);
$arguments465['query'] = NULL;
$arguments465['currentUrlParameterName'] = NULL;
$arguments465['route'] = 'tce_db';
$output467 = '';

$output467 .= 'data[be_users][';
$array468 = array (
);
$output467 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array468);

$output467 .= '][disable]=1';
$arguments465['query'] = $output467;
$arguments465['currentUrlParameterName'] = 'redirect';

$output464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext)]);

$output464 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments469 = array();
$arguments469['key'] = NULL;
$arguments469['id'] = NULL;
$arguments469['default'] = NULL;
$arguments469['arguments'] = NULL;
$arguments469['extensionName'] = NULL;
$arguments469['languageKey'] = NULL;
$arguments469['alternativeLanguageKeys'] = NULL;
$arguments469['key'] = 'visibility.hide';

$output464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext)]);

$output464 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments471 = array();
$arguments471['identifier'] = NULL;
$arguments471['size'] = 'small';
$arguments471['overlay'] = NULL;
$arguments471['state'] = 'default';
$arguments471['alternativeMarkupIdentifier'] = NULL;
$arguments471['identifier'] = 'actions-edit-hide';

$output464 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output464 .= '</a>
                        ';
return $output464;
};

$output452 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output452 .= '
                ';
return $output452;
};

$output370 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output370 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
$output583 = '';

$output583 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments587 = array();
$arguments587['identifier'] = NULL;
$arguments587['size'] = 'small';
$arguments587['overlay'] = NULL;
$arguments587['state'] = 'default';
$arguments587['alternativeMarkupIdentifier'] = NULL;
$arguments587['identifier'] = 'empty-empty';

$output586 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output586 .= '</span>
                ';
return $output586;
};
$arguments584 = array();

$output583 .= '';

$output583 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
$output591 = '';

$output591 .= '
                    <a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['route'] = NULL;
$arguments592['arguments'] = array (
);
$arguments592['query'] = NULL;
$arguments592['currentUrlParameterName'] = NULL;
$arguments592['route'] = 'tce_db';
$output594 = '';

$output594 .= 'cmd[be_users][';
$array595 = array (
);
$output594 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array595);

$output594 .= '][delete]=1';
$arguments592['query'] = $output594;
$arguments592['currentUrlParameterName'] = 'redirect';

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext)]);

$output591 .= '"
                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments596 = array();
$arguments596['key'] = NULL;
$arguments596['id'] = NULL;
$arguments596['default'] = NULL;
$arguments596['arguments'] = NULL;
$arguments596['extensionName'] = NULL;
$arguments596['languageKey'] = NULL;
$arguments596['alternativeLanguageKeys'] = NULL;
$arguments596['key'] = 'delete';

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext)]);

$output591 .= '"
                        data-severity="warning"
                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['key'] = NULL;
$arguments598['id'] = NULL;
$arguments598['default'] = NULL;
$arguments598['arguments'] = NULL;
$arguments598['extensionName'] = NULL;
$arguments598['languageKey'] = NULL;
$arguments598['alternativeLanguageKeys'] = NULL;
$arguments598['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext)]);

$output591 .= '"
                        data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments600 = array();
$arguments600['key'] = NULL;
$arguments600['id'] = NULL;
$arguments600['default'] = NULL;
$arguments600['arguments'] = NULL;
$arguments600['extensionName'] = NULL;
$arguments600['languageKey'] = NULL;
$arguments600['alternativeLanguageKeys'] = NULL;
$arguments600['key'] = 'confirm';
// Rendering Array
$array602 = array();
$array603 = array (
);$array602['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array603);
$arguments600['arguments'] = $array602;

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext)]);

$output591 .= '"
                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments604 = array();
$arguments604['key'] = NULL;
$arguments604['id'] = NULL;
$arguments604['default'] = NULL;
$arguments604['arguments'] = NULL;
$arguments604['extensionName'] = NULL;
$arguments604['languageKey'] = NULL;
$arguments604['alternativeLanguageKeys'] = NULL;
$arguments604['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext)]);

$output591 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments606 = array();
$arguments606['identifier'] = NULL;
$arguments606['size'] = 'small';
$arguments606['overlay'] = NULL;
$arguments606['state'] = 'default';
$arguments606['alternativeMarkupIdentifier'] = NULL;
$arguments606['identifier'] = 'actions-edit-delete';

$output591 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext);

$output591 .= '
                    </a>
                ';
return $output591;
};
$arguments589 = array();
$arguments589['if'] = NULL;

$output583 .= '';

$output583 .= '
            ';
return $output583;
};
$arguments557 = array();
$arguments557['then'] = NULL;
$arguments557['else'] = NULL;
$arguments557['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array579 = array();
$array580 = array (
);$array579['0'] = $renderingContext->getVariableProvider()->getByPath('currentUserUid', $array580);
$array579['1'] = ' == ';
$array581 = array (
);$array579['2'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array581);

$expression582 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments557['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression582(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array579)
					),
					$renderingContext
				);
$arguments557['__thenClosure'] = function() use ($renderingContext, $self) {
$output559 = '';

$output559 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments560 = array();
$arguments560['identifier'] = NULL;
$arguments560['size'] = 'small';
$arguments560['overlay'] = NULL;
$arguments560['state'] = 'default';
$arguments560['alternativeMarkupIdentifier'] = NULL;
$arguments560['identifier'] = 'empty-empty';

$output559 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments560, $renderChildrenClosure561, $renderingContext);

$output559 .= '</span>
                ';
return $output559;
};
$arguments557['__elseClosures'][] = function() use ($renderingContext, $self) {
$output562 = '';

$output562 .= '
                    <a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments563 = array();
$arguments563['route'] = NULL;
$arguments563['arguments'] = array (
);
$arguments563['query'] = NULL;
$arguments563['currentUrlParameterName'] = NULL;
$arguments563['route'] = 'tce_db';
$output565 = '';

$output565 .= 'cmd[be_users][';
$array566 = array (
);
$output565 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array566);

$output565 .= '][delete]=1';
$arguments563['query'] = $output565;
$arguments563['currentUrlParameterName'] = 'redirect';

$output562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext)]);

$output562 .= '"
                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments567 = array();
$arguments567['key'] = NULL;
$arguments567['id'] = NULL;
$arguments567['default'] = NULL;
$arguments567['arguments'] = NULL;
$arguments567['extensionName'] = NULL;
$arguments567['languageKey'] = NULL;
$arguments567['alternativeLanguageKeys'] = NULL;
$arguments567['key'] = 'delete';

$output562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext)]);

$output562 .= '"
                        data-severity="warning"
                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['key'] = NULL;
$arguments569['id'] = NULL;
$arguments569['default'] = NULL;
$arguments569['arguments'] = NULL;
$arguments569['extensionName'] = NULL;
$arguments569['languageKey'] = NULL;
$arguments569['alternativeLanguageKeys'] = NULL;
$arguments569['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext)]);

$output562 .= '"
                        data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments571 = array();
$arguments571['key'] = NULL;
$arguments571['id'] = NULL;
$arguments571['default'] = NULL;
$arguments571['arguments'] = NULL;
$arguments571['extensionName'] = NULL;
$arguments571['languageKey'] = NULL;
$arguments571['alternativeLanguageKeys'] = NULL;
$arguments571['key'] = 'confirm';
// Rendering Array
$array573 = array();
$array574 = array (
);$array573['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array574);
$arguments571['arguments'] = $array573;

$output562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext)]);

$output562 .= '"
                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments575 = array();
$arguments575['key'] = NULL;
$arguments575['id'] = NULL;
$arguments575['default'] = NULL;
$arguments575['arguments'] = NULL;
$arguments575['extensionName'] = NULL;
$arguments575['languageKey'] = NULL;
$arguments575['alternativeLanguageKeys'] = NULL;
$arguments575['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext)]);

$output562 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['identifier'] = NULL;
$arguments577['size'] = 'small';
$arguments577['overlay'] = NULL;
$arguments577['state'] = 'default';
$arguments577['alternativeMarkupIdentifier'] = NULL;
$arguments577['identifier'] = 'actions-edit-delete';

$output562 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext);

$output562 .= '
                    </a>
                ';
return $output562;
};

$output370 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments557, $renderChildrenClosure558, $renderingContext);

$output370 .= '
        </div>
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
$output635 = '';

$output635 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
$output654 = '';

$output654 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure656 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments655 = array();
$arguments655['identifier'] = NULL;
$arguments655['size'] = 'small';
$arguments655['overlay'] = NULL;
$arguments655['state'] = 'default';
$arguments655['alternativeMarkupIdentifier'] = NULL;
$arguments655['identifier'] = 'actions-edit-undo';

$output654 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments655, $renderChildrenClosure656, $renderingContext);

$output654 .= '
                    ';
return $output654;
};
$arguments639 = array();
$arguments639['additionalAttributes'] = NULL;
$arguments639['data'] = NULL;
$arguments639['aria'] = NULL;
$arguments639['class'] = NULL;
$arguments639['dir'] = NULL;
$arguments639['id'] = NULL;
$arguments639['lang'] = NULL;
$arguments639['style'] = NULL;
$arguments639['title'] = NULL;
$arguments639['accesskey'] = NULL;
$arguments639['tabindex'] = NULL;
$arguments639['onclick'] = NULL;
$arguments639['name'] = NULL;
$arguments639['rel'] = NULL;
$arguments639['rev'] = NULL;
$arguments639['target'] = NULL;
$arguments639['action'] = NULL;
$arguments639['controller'] = NULL;
$arguments639['extensionName'] = NULL;
$arguments639['pluginName'] = NULL;
$arguments639['pageUid'] = NULL;
$arguments639['pageType'] = NULL;
$arguments639['noCache'] = NULL;
$arguments639['noCacheHash'] = NULL;
$arguments639['section'] = NULL;
$arguments639['format'] = NULL;
$arguments639['linkAccessRestrictedPages'] = NULL;
$arguments639['additionalParams'] = NULL;
$arguments639['absolute'] = NULL;
$arguments639['addQueryString'] = NULL;
$arguments639['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments639['addQueryStringMethod'] = NULL;
$arguments639['arguments'] = NULL;
$arguments639['class'] = 'btn btn-default t3js-modal-trigger';
$arguments639['action'] = 'initiatePasswordReset';
// Rendering Array
$array641 = array();
$array642 = array (
);$array641['user'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array642);
$arguments639['arguments'] = $array641;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['key'] = NULL;
$arguments643['id'] = NULL;
$arguments643['default'] = NULL;
$arguments643['arguments'] = NULL;
$arguments643['extensionName'] = NULL;
$arguments643['languageKey'] = NULL;
$arguments643['alternativeLanguageKeys'] = NULL;
$arguments643['key'] = 'resetPassword.label';
$arguments639['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext);
// Rendering Array
$array645 = array();
$array645['severity'] = 'warning';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments646 = array();
$arguments646['key'] = NULL;
$arguments646['id'] = NULL;
$arguments646['default'] = NULL;
$arguments646['arguments'] = NULL;
$arguments646['extensionName'] = NULL;
$arguments646['languageKey'] = NULL;
$arguments646['alternativeLanguageKeys'] = NULL;
$arguments646['key'] = 'resetPassword.confirmation.header';
$array645['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments648 = array();
$arguments648['key'] = NULL;
$arguments648['id'] = NULL;
$arguments648['default'] = NULL;
$arguments648['arguments'] = NULL;
$arguments648['extensionName'] = NULL;
$arguments648['languageKey'] = NULL;
$arguments648['alternativeLanguageKeys'] = NULL;
$arguments648['key'] = 'resetPassword.confirmation.text';
// Rendering Array
$array650 = array();
$array651 = array (
);$array650['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.email', $array651);
$arguments648['arguments'] = $array650;
$array645['content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments652 = array();
$arguments652['key'] = NULL;
$arguments652['id'] = NULL;
$arguments652['default'] = NULL;
$arguments652['arguments'] = NULL;
$arguments652['extensionName'] = NULL;
$arguments652['languageKey'] = NULL;
$arguments652['alternativeLanguageKeys'] = NULL;
$arguments652['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';
$array645['button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);
$arguments639['data'] = $array645;

$output638 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext);

$output638 .= '
                ';
return $output638;
};
$arguments636 = array();

$output635 .= '';

$output635 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
$output659 = '';

$output659 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments660 = array();
$arguments660['identifier'] = NULL;
$arguments660['size'] = 'small';
$arguments660['overlay'] = NULL;
$arguments660['state'] = 'default';
$arguments660['alternativeMarkupIdentifier'] = NULL;
$arguments660['identifier'] = 'empty-empty';

$output659 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output659 .= '</span>
                ';
return $output659;
};
$arguments657 = array();
$arguments657['if'] = NULL;

$output635 .= '';

$output635 .= '
            ';
return $output635;
};
$arguments608 = array();
$arguments608['then'] = NULL;
$arguments608['else'] = NULL;
$arguments608['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array632 = array();
$array633 = array (
);$array632['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.passwordResetEnabled', $array633);

$expression634 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments608['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression634(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array632)
					),
					$renderingContext
				);
$arguments608['__thenClosure'] = function() use ($renderingContext, $self) {
$output610 = '';

$output610 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
$output626 = '';

$output626 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments627 = array();
$arguments627['identifier'] = NULL;
$arguments627['size'] = 'small';
$arguments627['overlay'] = NULL;
$arguments627['state'] = 'default';
$arguments627['alternativeMarkupIdentifier'] = NULL;
$arguments627['identifier'] = 'actions-edit-undo';

$output626 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments627, $renderChildrenClosure628, $renderingContext);

$output626 .= '
                    ';
return $output626;
};
$arguments611 = array();
$arguments611['additionalAttributes'] = NULL;
$arguments611['data'] = NULL;
$arguments611['aria'] = NULL;
$arguments611['class'] = NULL;
$arguments611['dir'] = NULL;
$arguments611['id'] = NULL;
$arguments611['lang'] = NULL;
$arguments611['style'] = NULL;
$arguments611['title'] = NULL;
$arguments611['accesskey'] = NULL;
$arguments611['tabindex'] = NULL;
$arguments611['onclick'] = NULL;
$arguments611['name'] = NULL;
$arguments611['rel'] = NULL;
$arguments611['rev'] = NULL;
$arguments611['target'] = NULL;
$arguments611['action'] = NULL;
$arguments611['controller'] = NULL;
$arguments611['extensionName'] = NULL;
$arguments611['pluginName'] = NULL;
$arguments611['pageUid'] = NULL;
$arguments611['pageType'] = NULL;
$arguments611['noCache'] = NULL;
$arguments611['noCacheHash'] = NULL;
$arguments611['section'] = NULL;
$arguments611['format'] = NULL;
$arguments611['linkAccessRestrictedPages'] = NULL;
$arguments611['additionalParams'] = NULL;
$arguments611['absolute'] = NULL;
$arguments611['addQueryString'] = NULL;
$arguments611['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments611['addQueryStringMethod'] = NULL;
$arguments611['arguments'] = NULL;
$arguments611['class'] = 'btn btn-default t3js-modal-trigger';
$arguments611['action'] = 'initiatePasswordReset';
// Rendering Array
$array613 = array();
$array614 = array (
);$array613['user'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array614);
$arguments611['arguments'] = $array613;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments615 = array();
$arguments615['key'] = NULL;
$arguments615['id'] = NULL;
$arguments615['default'] = NULL;
$arguments615['arguments'] = NULL;
$arguments615['extensionName'] = NULL;
$arguments615['languageKey'] = NULL;
$arguments615['alternativeLanguageKeys'] = NULL;
$arguments615['key'] = 'resetPassword.label';
$arguments611['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext);
// Rendering Array
$array617 = array();
$array617['severity'] = 'warning';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments618 = array();
$arguments618['key'] = NULL;
$arguments618['id'] = NULL;
$arguments618['default'] = NULL;
$arguments618['arguments'] = NULL;
$arguments618['extensionName'] = NULL;
$arguments618['languageKey'] = NULL;
$arguments618['alternativeLanguageKeys'] = NULL;
$arguments618['key'] = 'resetPassword.confirmation.header';
$array617['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments620 = array();
$arguments620['key'] = NULL;
$arguments620['id'] = NULL;
$arguments620['default'] = NULL;
$arguments620['arguments'] = NULL;
$arguments620['extensionName'] = NULL;
$arguments620['languageKey'] = NULL;
$arguments620['alternativeLanguageKeys'] = NULL;
$arguments620['key'] = 'resetPassword.confirmation.text';
// Rendering Array
$array622 = array();
$array623 = array (
);$array622['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.email', $array623);
$arguments620['arguments'] = $array622;
$array617['content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['key'] = NULL;
$arguments624['id'] = NULL;
$arguments624['default'] = NULL;
$arguments624['arguments'] = NULL;
$arguments624['extensionName'] = NULL;
$arguments624['languageKey'] = NULL;
$arguments624['alternativeLanguageKeys'] = NULL;
$arguments624['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';
$array617['button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);
$arguments611['data'] = $array617;

$output610 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);

$output610 .= '
                ';
return $output610;
};
$arguments608['__elseClosures'][] = function() use ($renderingContext, $self) {
$output629 = '';

$output629 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments630 = array();
$arguments630['identifier'] = NULL;
$arguments630['size'] = 'small';
$arguments630['overlay'] = NULL;
$arguments630['state'] = 'default';
$arguments630['alternativeMarkupIdentifier'] = NULL;
$arguments630['identifier'] = 'empty-empty';

$output629 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments630, $renderChildrenClosure631, $renderingContext);

$output629 .= '</span>
                ';
return $output629;
};

$output370 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext);

$output370 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$output668 = '';

$output668 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure670 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments669 = array();
$arguments669['identifier'] = NULL;
$arguments669['size'] = 'small';
$arguments669['overlay'] = NULL;
$arguments669['state'] = 'default';
$arguments669['alternativeMarkupIdentifier'] = NULL;
$arguments669['identifier'] = 'actions-system-options-view';
$arguments669['size'] = 'small';

$output668 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments669, $renderChildrenClosure670, $renderingContext);

$output668 .= '
            ';
return $output668;
};
$arguments662 = array();
$arguments662['additionalAttributes'] = NULL;
$arguments662['data'] = NULL;
$arguments662['aria'] = NULL;
$arguments662['class'] = NULL;
$arguments662['dir'] = NULL;
$arguments662['id'] = NULL;
$arguments662['lang'] = NULL;
$arguments662['style'] = NULL;
$arguments662['title'] = NULL;
$arguments662['accesskey'] = NULL;
$arguments662['tabindex'] = NULL;
$arguments662['onclick'] = NULL;
$arguments662['name'] = NULL;
$arguments662['rel'] = NULL;
$arguments662['rev'] = NULL;
$arguments662['target'] = NULL;
$arguments662['action'] = NULL;
$arguments662['controller'] = NULL;
$arguments662['extensionName'] = NULL;
$arguments662['pluginName'] = NULL;
$arguments662['pageUid'] = NULL;
$arguments662['pageType'] = NULL;
$arguments662['noCache'] = NULL;
$arguments662['noCacheHash'] = NULL;
$arguments662['section'] = NULL;
$arguments662['format'] = NULL;
$arguments662['linkAccessRestrictedPages'] = NULL;
$arguments662['additionalParams'] = NULL;
$arguments662['absolute'] = NULL;
$arguments662['addQueryString'] = NULL;
$arguments662['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments662['addQueryStringMethod'] = NULL;
$arguments662['arguments'] = NULL;
$arguments662['action'] = 'show';
// Rendering Array
$array664 = array();
$array665 = array (
);$array664['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array665);
$arguments662['arguments'] = $array664;
$arguments662['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure667 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments666 = array();
$arguments666['key'] = NULL;
$arguments666['id'] = NULL;
$arguments666['default'] = NULL;
$arguments666['arguments'] = NULL;
$arguments666['extensionName'] = NULL;
$arguments666['languageKey'] = NULL;
$arguments666['alternativeLanguageKeys'] = NULL;
$arguments666['key'] = 'details';
$arguments662['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments666, $renderChildrenClosure667, $renderingContext);

$output370 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext);

$output370 .= '
            <a class="btn btn-default" href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments671 = array();
$arguments671['key'] = NULL;
$arguments671['id'] = NULL;
$arguments671['default'] = NULL;
$arguments671['arguments'] = NULL;
$arguments671['extensionName'] = NULL;
$arguments671['languageKey'] = NULL;
$arguments671['alternativeLanguageKeys'] = NULL;
$arguments671['key'] = 'info';

$output370 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext)]);

$output370 .= '" data-dispatch-action="TYPO3.InfoWindow.showItem" data-dispatch-args-list="be_users,';
$array673 = array (
);
$output370 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array673)]);

$output370 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments674 = array();
$arguments674['identifier'] = NULL;
$arguments674['size'] = 'small';
$arguments674['overlay'] = NULL;
$arguments674['state'] = 'default';
$arguments674['alternativeMarkupIdentifier'] = NULL;
$arguments674['identifier'] = 'actions-document-info';

$output370 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext);

$output370 .= '
            </a>
        </div>
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
$output705 = '';

$output705 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure707 = function() use ($renderingContext, $self) {
$output708 = '';

$output708 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure710 = function() use ($renderingContext, $self) {
$output715 = '';

$output715 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments716 = array();
$arguments716['identifier'] = NULL;
$arguments716['size'] = 'small';
$arguments716['overlay'] = NULL;
$arguments716['state'] = 'default';
$arguments716['alternativeMarkupIdentifier'] = NULL;
$arguments716['identifier'] = 'actions-remove';
$arguments716['size'] = 'small';

$output715 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments716, $renderChildrenClosure717, $renderingContext);

$output715 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments718 = array();
$arguments718['key'] = NULL;
$arguments718['id'] = NULL;
$arguments718['default'] = NULL;
$arguments718['arguments'] = NULL;
$arguments718['extensionName'] = NULL;
$arguments718['languageKey'] = NULL;
$arguments718['alternativeLanguageKeys'] = NULL;
$arguments718['key'] = 'compare';

$output715 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext)]);

$output715 .= '
                    ';
return $output715;
};
$arguments709 = array();
$arguments709['additionalAttributes'] = NULL;
$arguments709['data'] = NULL;
$arguments709['aria'] = NULL;
$arguments709['class'] = NULL;
$arguments709['dir'] = NULL;
$arguments709['id'] = NULL;
$arguments709['lang'] = NULL;
$arguments709['style'] = NULL;
$arguments709['title'] = NULL;
$arguments709['accesskey'] = NULL;
$arguments709['tabindex'] = NULL;
$arguments709['onclick'] = NULL;
$arguments709['name'] = NULL;
$arguments709['rel'] = NULL;
$arguments709['rev'] = NULL;
$arguments709['target'] = NULL;
$arguments709['action'] = NULL;
$arguments709['controller'] = NULL;
$arguments709['extensionName'] = NULL;
$arguments709['pluginName'] = NULL;
$arguments709['pageUid'] = NULL;
$arguments709['pageType'] = NULL;
$arguments709['noCache'] = NULL;
$arguments709['noCacheHash'] = NULL;
$arguments709['section'] = NULL;
$arguments709['format'] = NULL;
$arguments709['linkAccessRestrictedPages'] = NULL;
$arguments709['additionalParams'] = NULL;
$arguments709['absolute'] = NULL;
$arguments709['addQueryString'] = NULL;
$arguments709['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments709['addQueryStringMethod'] = NULL;
$arguments709['arguments'] = NULL;
$arguments709['action'] = 'removeFromCompareList';
// Rendering Array
$array711 = array();
$array712 = array (
);$array711['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array712);
$arguments709['arguments'] = $array711;
$arguments709['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments713 = array();
$arguments713['key'] = NULL;
$arguments713['id'] = NULL;
$arguments713['default'] = NULL;
$arguments713['arguments'] = NULL;
$arguments713['extensionName'] = NULL;
$arguments713['languageKey'] = NULL;
$arguments713['alternativeLanguageKeys'] = NULL;
$arguments713['key'] = 'compare';
$arguments709['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext);

$output708 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments709, $renderChildrenClosure710, $renderingContext);

$output708 .= '
                ';
return $output708;
};
$arguments706 = array();

$output705 .= '';

$output705 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure721 = function() use ($renderingContext, $self) {
$output722 = '';

$output722 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure724 = function() use ($renderingContext, $self) {
$output729 = '';

$output729 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure731 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments730 = array();
$arguments730['identifier'] = NULL;
$arguments730['size'] = 'small';
$arguments730['overlay'] = NULL;
$arguments730['state'] = 'default';
$arguments730['alternativeMarkupIdentifier'] = NULL;
$arguments730['identifier'] = 'actions-add';
$arguments730['size'] = 'small';

$output729 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments730, $renderChildrenClosure731, $renderingContext);

$output729 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure733 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments732 = array();
$arguments732['key'] = NULL;
$arguments732['id'] = NULL;
$arguments732['default'] = NULL;
$arguments732['arguments'] = NULL;
$arguments732['extensionName'] = NULL;
$arguments732['languageKey'] = NULL;
$arguments732['alternativeLanguageKeys'] = NULL;
$arguments732['key'] = 'compare';

$output729 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments732, $renderChildrenClosure733, $renderingContext)]);

$output729 .= '
                    ';
return $output729;
};
$arguments723 = array();
$arguments723['additionalAttributes'] = NULL;
$arguments723['data'] = NULL;
$arguments723['aria'] = NULL;
$arguments723['class'] = NULL;
$arguments723['dir'] = NULL;
$arguments723['id'] = NULL;
$arguments723['lang'] = NULL;
$arguments723['style'] = NULL;
$arguments723['title'] = NULL;
$arguments723['accesskey'] = NULL;
$arguments723['tabindex'] = NULL;
$arguments723['onclick'] = NULL;
$arguments723['name'] = NULL;
$arguments723['rel'] = NULL;
$arguments723['rev'] = NULL;
$arguments723['target'] = NULL;
$arguments723['action'] = NULL;
$arguments723['controller'] = NULL;
$arguments723['extensionName'] = NULL;
$arguments723['pluginName'] = NULL;
$arguments723['pageUid'] = NULL;
$arguments723['pageType'] = NULL;
$arguments723['noCache'] = NULL;
$arguments723['noCacheHash'] = NULL;
$arguments723['section'] = NULL;
$arguments723['format'] = NULL;
$arguments723['linkAccessRestrictedPages'] = NULL;
$arguments723['additionalParams'] = NULL;
$arguments723['absolute'] = NULL;
$arguments723['addQueryString'] = NULL;
$arguments723['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments723['addQueryStringMethod'] = NULL;
$arguments723['arguments'] = NULL;
$arguments723['action'] = 'addToCompareList';
// Rendering Array
$array725 = array();
$array726 = array (
);$array725['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array726);
$arguments723['arguments'] = $array725;
$arguments723['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure728 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments727 = array();
$arguments727['key'] = NULL;
$arguments727['id'] = NULL;
$arguments727['default'] = NULL;
$arguments727['arguments'] = NULL;
$arguments727['extensionName'] = NULL;
$arguments727['languageKey'] = NULL;
$arguments727['alternativeLanguageKeys'] = NULL;
$arguments727['key'] = 'compare';
$arguments723['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments727, $renderChildrenClosure728, $renderingContext);

$output722 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments723, $renderChildrenClosure724, $renderingContext);

$output722 .= '
                ';
return $output722;
};
$arguments720 = array();
$arguments720['if'] = NULL;

$output705 .= '';

$output705 .= '
            ';
return $output705;
};
$arguments676 = array();
$arguments676['then'] = NULL;
$arguments676['else'] = NULL;
$arguments676['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array702 = array();
$array703 = array (
);$array702['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserUidList.{backendUser.uid}', $array703);

$expression704 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments676['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression704(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array702)
					),
					$renderingContext
				);
$arguments676['__thenClosure'] = function() use ($renderingContext, $self) {
$output678 = '';

$output678 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure680 = function() use ($renderingContext, $self) {
$output685 = '';

$output685 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments686 = array();
$arguments686['identifier'] = NULL;
$arguments686['size'] = 'small';
$arguments686['overlay'] = NULL;
$arguments686['state'] = 'default';
$arguments686['alternativeMarkupIdentifier'] = NULL;
$arguments686['identifier'] = 'actions-remove';
$arguments686['size'] = 'small';

$output685 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext);

$output685 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments688 = array();
$arguments688['key'] = NULL;
$arguments688['id'] = NULL;
$arguments688['default'] = NULL;
$arguments688['arguments'] = NULL;
$arguments688['extensionName'] = NULL;
$arguments688['languageKey'] = NULL;
$arguments688['alternativeLanguageKeys'] = NULL;
$arguments688['key'] = 'compare';

$output685 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments688, $renderChildrenClosure689, $renderingContext)]);

$output685 .= '
                    ';
return $output685;
};
$arguments679 = array();
$arguments679['additionalAttributes'] = NULL;
$arguments679['data'] = NULL;
$arguments679['aria'] = NULL;
$arguments679['class'] = NULL;
$arguments679['dir'] = NULL;
$arguments679['id'] = NULL;
$arguments679['lang'] = NULL;
$arguments679['style'] = NULL;
$arguments679['title'] = NULL;
$arguments679['accesskey'] = NULL;
$arguments679['tabindex'] = NULL;
$arguments679['onclick'] = NULL;
$arguments679['name'] = NULL;
$arguments679['rel'] = NULL;
$arguments679['rev'] = NULL;
$arguments679['target'] = NULL;
$arguments679['action'] = NULL;
$arguments679['controller'] = NULL;
$arguments679['extensionName'] = NULL;
$arguments679['pluginName'] = NULL;
$arguments679['pageUid'] = NULL;
$arguments679['pageType'] = NULL;
$arguments679['noCache'] = NULL;
$arguments679['noCacheHash'] = NULL;
$arguments679['section'] = NULL;
$arguments679['format'] = NULL;
$arguments679['linkAccessRestrictedPages'] = NULL;
$arguments679['additionalParams'] = NULL;
$arguments679['absolute'] = NULL;
$arguments679['addQueryString'] = NULL;
$arguments679['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments679['addQueryStringMethod'] = NULL;
$arguments679['arguments'] = NULL;
$arguments679['action'] = 'removeFromCompareList';
// Rendering Array
$array681 = array();
$array682 = array (
);$array681['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array682);
$arguments679['arguments'] = $array681;
$arguments679['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments683 = array();
$arguments683['key'] = NULL;
$arguments683['id'] = NULL;
$arguments683['default'] = NULL;
$arguments683['arguments'] = NULL;
$arguments683['extensionName'] = NULL;
$arguments683['languageKey'] = NULL;
$arguments683['alternativeLanguageKeys'] = NULL;
$arguments683['key'] = 'compare';
$arguments679['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext);

$output678 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments679, $renderChildrenClosure680, $renderingContext);

$output678 .= '
                ';
return $output678;
};
$arguments676['__elseClosures'][] = function() use ($renderingContext, $self) {
$output690 = '';

$output690 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
$output697 = '';

$output697 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure699 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments698 = array();
$arguments698['identifier'] = NULL;
$arguments698['size'] = 'small';
$arguments698['overlay'] = NULL;
$arguments698['state'] = 'default';
$arguments698['alternativeMarkupIdentifier'] = NULL;
$arguments698['identifier'] = 'actions-add';
$arguments698['size'] = 'small';

$output697 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments698, $renderChildrenClosure699, $renderingContext);

$output697 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments700 = array();
$arguments700['key'] = NULL;
$arguments700['id'] = NULL;
$arguments700['default'] = NULL;
$arguments700['arguments'] = NULL;
$arguments700['extensionName'] = NULL;
$arguments700['languageKey'] = NULL;
$arguments700['alternativeLanguageKeys'] = NULL;
$arguments700['key'] = 'compare';

$output697 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext)]);

$output697 .= '
                    ';
return $output697;
};
$arguments691 = array();
$arguments691['additionalAttributes'] = NULL;
$arguments691['data'] = NULL;
$arguments691['aria'] = NULL;
$arguments691['class'] = NULL;
$arguments691['dir'] = NULL;
$arguments691['id'] = NULL;
$arguments691['lang'] = NULL;
$arguments691['style'] = NULL;
$arguments691['title'] = NULL;
$arguments691['accesskey'] = NULL;
$arguments691['tabindex'] = NULL;
$arguments691['onclick'] = NULL;
$arguments691['name'] = NULL;
$arguments691['rel'] = NULL;
$arguments691['rev'] = NULL;
$arguments691['target'] = NULL;
$arguments691['action'] = NULL;
$arguments691['controller'] = NULL;
$arguments691['extensionName'] = NULL;
$arguments691['pluginName'] = NULL;
$arguments691['pageUid'] = NULL;
$arguments691['pageType'] = NULL;
$arguments691['noCache'] = NULL;
$arguments691['noCacheHash'] = NULL;
$arguments691['section'] = NULL;
$arguments691['format'] = NULL;
$arguments691['linkAccessRestrictedPages'] = NULL;
$arguments691['additionalParams'] = NULL;
$arguments691['absolute'] = NULL;
$arguments691['addQueryString'] = NULL;
$arguments691['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments691['addQueryStringMethod'] = NULL;
$arguments691['arguments'] = NULL;
$arguments691['action'] = 'addToCompareList';
// Rendering Array
$array693 = array();
$array694 = array (
);$array693['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array694);
$arguments691['arguments'] = $array693;
$arguments691['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments695 = array();
$arguments695['key'] = NULL;
$arguments695['id'] = NULL;
$arguments695['default'] = NULL;
$arguments695['arguments'] = NULL;
$arguments695['extensionName'] = NULL;
$arguments695['languageKey'] = NULL;
$arguments695['alternativeLanguageKeys'] = NULL;
$arguments695['key'] = 'compare';
$arguments691['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext);

$output690 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments691, $renderChildrenClosure692, $renderingContext);

$output690 .= '
                ';
return $output690;
};

$output370 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);

$output370 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper
$renderChildrenClosure735 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments734 = array();
$arguments734['backendUser'] = NULL;
$array736 = array (
);$arguments734['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array736);

$output370 .= TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper::renderStatic($arguments734, $renderChildrenClosure735, $renderingContext);

$output370 .= '
        </div>
    </td>
</tr>
';
return $output370;
};
$arguments368 = array();
$arguments368['name'] = NULL;
$arguments368['name'] = 'list_row';

$output367 .= NULL;

$output367 .= '
</html>
';

return $output367;
}


}
#