<?php

class Standard_action_default_b25840c3f66c46a99bf36cc34ea9a9073772be16 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= ' 
    <!-- ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
            <f:render partial="Header/headerlight.html" arguments=”';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getAll()]);

$output13 .= '” />
        ';
return $output13;
};
$arguments11 = array();

$output10 .= '';

$output10 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
            <f:render partial="Header/headerdark.html" arguments=”';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getAll()]);

$output17 .= '” />
        ';
return $output17;
};
$arguments15 = array();
$arguments15['if'] = NULL;

$output10 .= '';

$output10 .= '
    ';
return $output10;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('data.pid', $array8);
$array7['1'] = ' == 1';

$expression9 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            <f:render partial="Header/headerlight.html" arguments=”';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getAll()]);

$output3 .= '” />
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
            <f:render partial="Header/headerdark.html" arguments=”';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getAll()]);

$output5 .= '” />
        ';
return $output5;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= ' -->
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['data'] = NULL;
$arguments19['typoscriptObjectPath'] = NULL;
$arguments19['currentValueKey'] = NULL;
$arguments19['table'] = '';
$arguments19['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array21 = array();
$array21['colPos'] = 0;
$arguments19['data'] = $array21;
$renderChildrenClosure20 = ($arguments19['data'] !== null) ? function() use ($arguments19) { return $arguments19['data']; } : $renderChildrenClosure20;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '  
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['section'] = NULL;
$arguments22['partial'] = NULL;
$arguments22['delegate'] = NULL;
$arguments22['renderable'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$arguments22['default'] = NULL;
$arguments22['contentAs'] = NULL;
$arguments22['debug'] = true;
$arguments22['partial'] = 'Footer/Footer.html';
$arguments22['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output25 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['name'] = NULL;
$arguments26['name'] = 'Default';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output25 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= ' 
    <!-- ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
            <f:render partial="Header/headerlight.html" arguments=”';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getAll()]);

$output43 .= '” />
        ';
return $output43;
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
            <f:render partial="Header/headerdark.html" arguments=”';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getAll()]);

$output47 .= '” />
        ';
return $output47;
};
$arguments45 = array();
$arguments45['if'] = NULL;

$output40 .= '';

$output40 .= '
    ';
return $output40;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('data.pid', $array38);
$array37['1'] = ' == 1';

$expression39 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            <f:render partial="Header/headerlight.html" arguments=”';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getAll()]);

$output33 .= '” />
        ';
return $output33;
};
$arguments31['__elseClosures'][] = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
            <f:render partial="Header/headerdark.html" arguments=”';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getAll()]);

$output35 .= '” />
        ';
return $output35;
};

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= ' -->
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['data'] = NULL;
$arguments49['typoscriptObjectPath'] = NULL;
$arguments49['currentValueKey'] = NULL;
$arguments49['table'] = '';
$arguments49['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array51 = array();
$array51['colPos'] = 0;
$arguments49['data'] = $array51;
$renderChildrenClosure50 = ($arguments49['data'] !== null) ? function() use ($arguments49) { return $arguments49['data']; } : $renderChildrenClosure50;
$output30 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output30 .= '  
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['section'] = NULL;
$arguments52['partial'] = NULL;
$arguments52['delegate'] = NULL;
$arguments52['renderable'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['optional'] = false;
$arguments52['default'] = NULL;
$arguments52['contentAs'] = NULL;
$arguments52['debug'] = true;
$arguments52['partial'] = 'Footer/Footer.html';
$arguments52['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output30 .= '
';
return $output30;
};
$arguments28 = array();
$arguments28['name'] = NULL;
$arguments28['name'] = 'Main';

$output25 .= NULL;

$output25 .= '

';

return $output25;
}


}
#