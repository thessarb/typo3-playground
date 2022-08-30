<?php

class StoreInventory_action_list_1007026864e1a9ed3ad8f109ab3852549ce98286 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="container products-container">
    <h2>Products:</h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Product name</th>
            <th scope="col">Product description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
                <tr>
                <th scope="row">';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string5 = '{index+1}';
$array6 = array (
  0 => '{index+1}',
  1 => '{index+1}',
);

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string5, $array6)]);

$output4 .= '</th>
                <td>';
$array7 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.name', $array7)]);

$output4 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.description', $array10)]);
};
$arguments8 = array();
$arguments8['maxCharacters'] = NULL;
$arguments8['append'] = '&hellip;';
$arguments8['respectWordBoundaries'] = true;
$arguments8['respectHtml'] = true;
$arguments8['maxCharacters'] = 100;

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output4 .= '</td>
                <td>';
$array11 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.quantity', $array11)]);

$output4 .= '</td>
                <td>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['aria'] = NULL;
$arguments15['name'] = NULL;
$arguments15['value'] = NULL;
$arguments15['property'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['property'] = 'uid';
$array17 = array (
);$arguments15['value'] = $renderingContext->getVariableProvider()->getByPath('product.uid', $array17);

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments18 = array();
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['aria'] = NULL;
$arguments18['name'] = NULL;
$arguments18['value'] = NULL;
$arguments18['property'] = NULL;
$arguments18['autofocus'] = NULL;
$arguments18['disabled'] = NULL;
$arguments18['form'] = NULL;
$arguments18['formaction'] = NULL;
$arguments18['formenctype'] = NULL;
$arguments18['formmethod'] = NULL;
$arguments18['formnovalidate'] = NULL;
$arguments18['formtarget'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['type'] = 'submit';
$arguments18['class'] = 'btn btn-warning';

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output14 .= '
                    ';
return $output14;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['aria'] = NULL;
$arguments12['action'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['controller'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['pluginName'] = NULL;
$arguments12['pageUid'] = NULL;
$arguments12['object'] = NULL;
$arguments12['pageType'] = 0;
$arguments12['noCache'] = false;
$arguments12['noCacheHash'] = NULL;
$arguments12['section'] = '';
$arguments12['format'] = '';
$arguments12['additionalParams'] = array (
);
$arguments12['absolute'] = false;
$arguments12['addQueryString'] = false;
$arguments12['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments12['addQueryStringMethod'] = 'GET';
$arguments12['fieldNamePrefix'] = NULL;
$arguments12['actionUri'] = NULL;
$arguments12['objectName'] = NULL;
$arguments12['hiddenFieldClassName'] = NULL;
$arguments12['enctype'] = NULL;
$arguments12['method'] = NULL;
$arguments12['name'] = NULL;
$arguments12['onreset'] = NULL;
$arguments12['onsubmit'] = NULL;
$arguments12['target'] = NULL;
$arguments12['novalidate'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['action'] = 'edit';
$arguments12['controller'] = 'StoreInventory';
$arguments12['objectName'] = 'product';
$arguments12['method'] = 'post';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output4 .= '
                </td>
                <td>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['aria'] = NULL;
$arguments23['name'] = NULL;
$arguments23['value'] = NULL;
$arguments23['property'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['property'] = 'uid';
$array25 = array (
);$arguments23['value'] = $renderingContext->getVariableProvider()->getByPath('product.uid', $array25);

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['aria'] = NULL;
$arguments26['name'] = NULL;
$arguments26['value'] = NULL;
$arguments26['property'] = NULL;
$arguments26['autofocus'] = NULL;
$arguments26['disabled'] = NULL;
$arguments26['form'] = NULL;
$arguments26['formaction'] = NULL;
$arguments26['formenctype'] = NULL;
$arguments26['formmethod'] = NULL;
$arguments26['formnovalidate'] = NULL;
$arguments26['formtarget'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['type'] = 'submit';
$arguments26['class'] = 'btn btn-danger';

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output22 .= '
                    ';
return $output22;
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['aria'] = NULL;
$arguments20['action'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['controller'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['pluginName'] = NULL;
$arguments20['pageUid'] = NULL;
$arguments20['object'] = NULL;
$arguments20['pageType'] = 0;
$arguments20['noCache'] = false;
$arguments20['noCacheHash'] = NULL;
$arguments20['section'] = '';
$arguments20['format'] = '';
$arguments20['additionalParams'] = array (
);
$arguments20['absolute'] = false;
$arguments20['addQueryString'] = false;
$arguments20['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments20['addQueryStringMethod'] = 'GET';
$arguments20['fieldNamePrefix'] = NULL;
$arguments20['actionUri'] = NULL;
$arguments20['objectName'] = NULL;
$arguments20['hiddenFieldClassName'] = NULL;
$arguments20['enctype'] = NULL;
$arguments20['method'] = NULL;
$arguments20['name'] = NULL;
$arguments20['onreset'] = NULL;
$arguments20['onsubmit'] = NULL;
$arguments20['target'] = NULL;
$arguments20['novalidate'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['action'] = 'delete';
$arguments20['controller'] = 'StoreInventory';
$arguments20['objectName'] = 'product';
$arguments20['method'] = 'delete';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output4 .= '
                </td>
                </tr>
            ';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('products', $array3);
$arguments1['as'] = 'product';
$arguments1['key'] = 'index';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        </tbody>
        </table>
    <h2>Add New Product:</h2>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
        <div class="form-group">
            <label>Name</label><br>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['aria'] = NULL;
$arguments31['name'] = NULL;
$arguments31['value'] = NULL;
$arguments31['property'] = NULL;
$arguments31['autofocus'] = NULL;
$arguments31['disabled'] = NULL;
$arguments31['maxlength'] = NULL;
$arguments31['readonly'] = NULL;
$arguments31['size'] = NULL;
$arguments31['placeholder'] = NULL;
$arguments31['pattern'] = NULL;
$arguments31['errorClass'] = 'f3-form-error';
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['required'] = false;
$arguments31['type'] = 'text';
$arguments31['property'] = 'name';
$arguments31['class'] = 'form-control';

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '<br>
            <label>Description</label><br>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['aria'] = NULL;
$arguments33['name'] = NULL;
$arguments33['value'] = NULL;
$arguments33['property'] = NULL;
$arguments33['autofocus'] = NULL;
$arguments33['rows'] = NULL;
$arguments33['cols'] = NULL;
$arguments33['disabled'] = NULL;
$arguments33['placeholder'] = NULL;
$arguments33['errorClass'] = 'f3-form-error';
$arguments33['readonly'] = NULL;
$arguments33['required'] = false;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['property'] = 'description';
$arguments33['class'] = 'form-control';

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output30 .= '<br>
            <label>Quantity</label><br>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['aria'] = NULL;
$arguments35['name'] = NULL;
$arguments35['value'] = NULL;
$arguments35['property'] = NULL;
$arguments35['autofocus'] = NULL;
$arguments35['disabled'] = NULL;
$arguments35['maxlength'] = NULL;
$arguments35['readonly'] = NULL;
$arguments35['size'] = NULL;
$arguments35['placeholder'] = NULL;
$arguments35['pattern'] = NULL;
$arguments35['errorClass'] = 'f3-form-error';
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['required'] = false;
$arguments35['type'] = 'text';
$arguments35['property'] = 'quantity';
$arguments35['class'] = 'form-control';

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output30 .= '<br>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return 'Submit';
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['aria'] = NULL;
$arguments37['name'] = NULL;
$arguments37['value'] = NULL;
$arguments37['property'] = NULL;
$arguments37['autofocus'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['form'] = NULL;
$arguments37['formaction'] = NULL;
$arguments37['formenctype'] = NULL;
$arguments37['formmethod'] = NULL;
$arguments37['formnovalidate'] = NULL;
$arguments37['formtarget'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['type'] = 'submit';
$arguments37['class'] = 'btn btn-success';

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output30 .= '
        </div>
    ';
return $output30;
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['aria'] = NULL;
$arguments28['action'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['controller'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['pluginName'] = NULL;
$arguments28['pageUid'] = NULL;
$arguments28['object'] = NULL;
$arguments28['pageType'] = 0;
$arguments28['noCache'] = false;
$arguments28['noCacheHash'] = NULL;
$arguments28['section'] = '';
$arguments28['format'] = '';
$arguments28['additionalParams'] = array (
);
$arguments28['absolute'] = false;
$arguments28['addQueryString'] = false;
$arguments28['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments28['addQueryStringMethod'] = 'GET';
$arguments28['fieldNamePrefix'] = NULL;
$arguments28['actionUri'] = NULL;
$arguments28['objectName'] = NULL;
$arguments28['hiddenFieldClassName'] = NULL;
$arguments28['enctype'] = NULL;
$arguments28['method'] = NULL;
$arguments28['name'] = NULL;
$arguments28['onreset'] = NULL;
$arguments28['onsubmit'] = NULL;
$arguments28['target'] = NULL;
$arguments28['novalidate'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['action'] = 'store';
$arguments28['controller'] = 'StoreInventory';
$arguments28['objectName'] = 'product';
$arguments28['method'] = 'post';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
</div>
';

return $output0;
}


}
#