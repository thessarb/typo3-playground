<?php

class Standard_action_accordion_1325030557dae4341f1e901de4651406da089317 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<!-- <div class="accordion-header container" style="margin-top:50px;margin-bottom:50px;">
    <h1>';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_accordion_header', $array1)]);

$output0 .= '</h1>
    <h4 style="margin-bottom: 30px;">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$array4 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_accordion_description', $array4)]);
};
$arguments2 = array();
$arguments2['value'] = NULL;
$renderChildrenClosure3 = ($arguments2['value'] !== null) ? function() use ($arguments2) { return $arguments2['value']; } : $renderChildrenClosure3;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '</h4>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
        <li style="list-style-type:none">
            <div class="accordion">
                <div class="accordion-item">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="" aria-expanded="true" aria-controls="collapseOne">
                        ';
$array9 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_accordion_item_header', $array9)]);

$output8 .= '
                    </button>
                <div class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array12 = array (
);return $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_accordion_item_text', $array12);
};
$arguments10 = array();
$arguments10['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output8 .= '
                    </div>
                </div>
            </div>
         </li>
    ';
return $output8;
};
$arguments5 = array();
$arguments5['each'] = NULL;
$arguments5['as'] = NULL;
$arguments5['key'] = NULL;
$arguments5['reverse'] = false;
$arguments5['iteration'] = NULL;
$array7 = array (
);$arguments5['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_accordion_repeater', $array7);
$arguments5['as'] = 'data_item';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
</div> -->

<div class="accordion-header container" style="margin-top:50px;margin-bottom:50px;">
    <h1>';
$array13 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_accordion_header', $array13)]);

$output0 .= '</h1>
    <h4 style="margin-bottom: 30px;">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_accordion_description', $array16)]);
};
$arguments14 = array();
$arguments14['value'] = NULL;
$renderChildrenClosure15 = ($arguments14['value'] !== null) ? function() use ($arguments14) { return $arguments14['value']; } : $renderChildrenClosure15;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '</h4>
    <div class="accordion">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button">
                        ';
$array21 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('single_accordion.tx_mask_accordion_item_header', $array21)]);

$output20 .= '
                    </button>
                </h2>
                <div class="accordion-collapse">
                    <div class="accordion-body">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('single_accordion.tx_mask_accordion_item_text', $array24);
};
$arguments22 = array();
$arguments22['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output20 .= '
                    </div>
                </div>
            </div>
        ';
return $output20;
};
$arguments17 = array();
$arguments17['each'] = NULL;
$arguments17['as'] = NULL;
$arguments17['key'] = NULL;
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$array19 = array (
);$arguments17['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_accordion_repeater', $array19);
$arguments17['as'] = 'single_accordion';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
    </div>
</div>';

return $output0;
}


}
#