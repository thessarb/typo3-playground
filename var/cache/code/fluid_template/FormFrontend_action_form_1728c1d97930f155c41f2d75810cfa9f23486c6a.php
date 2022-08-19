<?php

class FormFrontend_action_form_1728c1d97930f155c41f2d75810cfa9f23486c6a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="form-container form-identifier-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.formDefinition.identifier', $array1)]);

$output0 .= '">
    ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\FormViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
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
$array24 = array (
);$arguments22['partial'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage.templateName', $array24);
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['page'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage', $array26);
$arguments22['arguments'] = $array25;

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
            <div class="form-actions">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['section'] = NULL;
$arguments27['partial'] = NULL;
$arguments27['delegate'] = NULL;
$arguments27['renderable'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['optional'] = false;
$arguments27['default'] = NULL;
$arguments27['contentAs'] = NULL;
$arguments27['debug'] = true;
$arguments27['partial'] = 'Form/Navigation';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array30);
$arguments27['arguments'] = $array29;

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output21 .= '
            </div>
        ';
return $output21;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['aria'] = NULL;
$arguments6['action'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['controller'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['pluginName'] = NULL;
$arguments6['pageUid'] = NULL;
$arguments6['object'] = NULL;
$arguments6['pageType'] = 0;
$arguments6['noCache'] = false;
$arguments6['noCacheHash'] = NULL;
$arguments6['section'] = '';
$arguments6['format'] = '';
$arguments6['additionalParams'] = array (
);
$arguments6['absolute'] = false;
$arguments6['addQueryString'] = false;
$arguments6['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments6['addQueryStringMethod'] = 'GET';
$arguments6['fieldNamePrefix'] = NULL;
$arguments6['actionUri'] = NULL;
$arguments6['objectName'] = NULL;
$arguments6['hiddenFieldClassName'] = NULL;
$arguments6['enctype'] = NULL;
$arguments6['method'] = NULL;
$arguments6['name'] = NULL;
$arguments6['onreset'] = NULL;
$arguments6['onsubmit'] = NULL;
$arguments6['target'] = NULL;
$arguments6['novalidate'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$array8 = array (
);$arguments6['object'] = $renderingContext->getVariableProvider()->getByPath('form', $array8);
$array9 = array (
);$arguments6['action'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.controllerAction', $array9);
$array10 = array (
);$arguments6['method'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpMethod', $array10);
$array11 = array (
);$arguments6['id'] = $renderingContext->getVariableProvider()->getByPath('form.identifier', $array11);
$array12 = array (
);$arguments6['section'] = $renderingContext->getVariableProvider()->getByPath('form.identifier', $array12);
$array13 = array (
);$arguments6['enctype'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpEnctype', $array13);
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.addQueryString', $array15);

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$array17 = array (
);$arguments6['argumentsToBeExcludedFromQueryString'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.argumentsToBeExcludedFromQueryString', $array17);
$array18 = array (
);$arguments6['additionalParams'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.additionalParams', $array18);
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array19['0'] = 1;

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['novalidate'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);

$output5 .= TYPO3\CMS\Form\ViewHelpers\FormViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
    ';
return $output5;
};
$arguments2 = array();
$arguments2['renderable'] = NULL;
$array4 = array (
);$arguments2['renderable'] = $renderingContext->getVariableProvider()->getByPath('form', $array4);

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
</div>

';

return $output0;
}


}
#