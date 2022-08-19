<?php

class partial_Form_Navigation_cd6f2881887c67705c6889da4728aa86b15ed342 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<nav class="form-navigation">
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                <span class="btn-group previous">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['aria'] = NULL;
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['property'] = '__currentPage';
$array9 = array (
);$arguments7['value'] = $renderingContext->getVariableProvider()->getByPath('form.previousPage.index', $array9);

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['element'] = NULL;
$arguments14['property'] = NULL;
$arguments14['renderingOptionProperty'] = NULL;
$array16 = array (
);$arguments14['element'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage', $array16);
$arguments14['renderingOptionProperty'] = 'previousButtonLabel';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['aria'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['property'] = NULL;
$arguments10['autofocus'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['form'] = NULL;
$arguments10['formaction'] = NULL;
$arguments10['formenctype'] = NULL;
$arguments10['formmethod'] = NULL;
$arguments10['formnovalidate'] = NULL;
$arguments10['formtarget'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['type'] = 'submit';
$arguments10['type'] = 'button';
$output12 = '';

$output12 .= 'document.forms[\'';
$array13 = array (
);
$output12 .= $renderingContext->getVariableProvider()->getByPath('form.formDefinition.identifier', $array13);

$output12 .= '\'].submit();';
$arguments10['onclick'] = $output12;
$arguments10['class'] = 'btn btn-cancel';
$arguments10['formnovalidate'] = 'formnovalidate';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= '
                </span>
            ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('form.previousPage', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                    <span class="btn-group next">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['element'] = NULL;
$arguments46['property'] = NULL;
$arguments46['renderingOptionProperty'] = NULL;
$array48 = array (
);$arguments46['element'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage', $array48);
$arguments46['renderingOptionProperty'] = 'nextButtonLabel';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['aria'] = NULL;
$arguments43['name'] = NULL;
$arguments43['value'] = NULL;
$arguments43['property'] = NULL;
$arguments43['autofocus'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['form'] = NULL;
$arguments43['formaction'] = NULL;
$arguments43['formenctype'] = NULL;
$arguments43['formmethod'] = NULL;
$arguments43['formnovalidate'] = NULL;
$arguments43['formtarget'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['type'] = 'submit';
$arguments43['property'] = '__currentPage';
$array45 = array (
);$arguments43['value'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage.index', $array45);
$arguments43['class'] = 'btn btn-primary';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
                    </span>
                ';
return $output42;
};
$arguments40 = array();

$output39 .= '';

$output39 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                    <span class="btn-group next submit">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['element'] = NULL;
$arguments58['property'] = NULL;
$arguments58['renderingOptionProperty'] = NULL;
$array60 = array (
);$arguments58['element'] = $renderingContext->getVariableProvider()->getByPath('form', $array60);
$arguments58['renderingOptionProperty'] = 'submitButtonLabel';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= '
                        ';
return $output57;
};
$arguments52 = array();
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['aria'] = NULL;
$arguments52['name'] = NULL;
$arguments52['value'] = NULL;
$arguments52['property'] = NULL;
$arguments52['autofocus'] = NULL;
$arguments52['disabled'] = NULL;
$arguments52['form'] = NULL;
$arguments52['formaction'] = NULL;
$arguments52['formenctype'] = NULL;
$arguments52['formmethod'] = NULL;
$arguments52['formnovalidate'] = NULL;
$arguments52['formtarget'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['type'] = 'submit';
$arguments52['property'] = '__currentPage';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$array56 = array (
);return $renderingContext->getVariableProvider()->getByPath('form.pages', $array56);
};
$arguments54 = array();
$arguments54['subject'] = NULL;
$renderChildrenClosure55 = ($arguments54['subject'] !== null) ? function() use ($arguments54) { return $arguments54['subject']; } : $renderChildrenClosure55;$arguments52['value'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);
$arguments52['class'] = 'btn btn-primary';

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                    </span>
                ';
return $output51;
};
$arguments49 = array();
$arguments49['if'] = NULL;

$output39 .= '';

$output39 .= '
            ';
return $output39;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage', $array37);

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    <span class="btn-group next">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['element'] = NULL;
$arguments23['property'] = NULL;
$arguments23['renderingOptionProperty'] = NULL;
$array25 = array (
);$arguments23['element'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage', $array25);
$arguments23['renderingOptionProperty'] = 'nextButtonLabel';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['aria'] = NULL;
$arguments20['name'] = NULL;
$arguments20['value'] = NULL;
$arguments20['property'] = NULL;
$arguments20['autofocus'] = NULL;
$arguments20['disabled'] = NULL;
$arguments20['form'] = NULL;
$arguments20['formaction'] = NULL;
$arguments20['formenctype'] = NULL;
$arguments20['formmethod'] = NULL;
$arguments20['formnovalidate'] = NULL;
$arguments20['formtarget'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['type'] = 'submit';
$arguments20['property'] = '__currentPage';
$array22 = array (
);$arguments20['value'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage.index', $array22);
$arguments20['class'] = 'btn btn-primary';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                    </span>
                ';
return $output19;
};
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                    <span class="btn-group next submit">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['element'] = NULL;
$arguments33['property'] = NULL;
$arguments33['renderingOptionProperty'] = NULL;
$array35 = array (
);$arguments33['element'] = $renderingContext->getVariableProvider()->getByPath('form', $array35);
$arguments33['renderingOptionProperty'] = 'submitButtonLabel';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '
                        ';
return $output32;
};
$arguments27 = array();
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['aria'] = NULL;
$arguments27['name'] = NULL;
$arguments27['value'] = NULL;
$arguments27['property'] = NULL;
$arguments27['autofocus'] = NULL;
$arguments27['disabled'] = NULL;
$arguments27['form'] = NULL;
$arguments27['formaction'] = NULL;
$arguments27['formenctype'] = NULL;
$arguments27['formmethod'] = NULL;
$arguments27['formnovalidate'] = NULL;
$arguments27['formtarget'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['type'] = 'submit';
$arguments27['property'] = '__currentPage';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('form.pages', $array31);
};
$arguments29 = array();
$arguments29['subject'] = NULL;
$renderChildrenClosure30 = ($arguments29['subject'] !== null) ? function() use ($arguments29) { return $arguments29['subject']; } : $renderChildrenClosure30;$arguments27['value'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);
$arguments27['class'] = 'btn btn-primary';

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                    </span>
                ';
return $output26;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
        </div>
    </div>
</nav>

';

return $output0;
}


}
#