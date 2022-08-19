<?php

class Standard_action_basicElement_c2ae877b96ed3f87dea8fc6252db3d834abcfc18 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<style>
  .buttonlol{
    background-color: ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_select_color', $array1)]);

$output0 .= ';
    outline-color: ';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_outlinecolor', $array2)]);

$output0 .= ';
  }
</style>

<div style="display:flex; justify-content:center;">
  <div class="card" style="width: 18rem;">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['aria'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['alt'] = NULL;
$arguments7['ismap'] = NULL;
$arguments7['longdesc'] = NULL;
$arguments7['usemap'] = NULL;
$arguments7['loading'] = NULL;
$arguments7['src'] = '';
$arguments7['treatIdAsReference'] = false;
$arguments7['image'] = NULL;
$arguments7['crop'] = NULL;
$arguments7['cropVariant'] = 'default';
$arguments7['fileExtension'] = NULL;
$arguments7['width'] = NULL;
$arguments7['height'] = NULL;
$arguments7['minWidth'] = NULL;
$arguments7['minHeight'] = NULL;
$arguments7['maxWidth'] = NULL;
$arguments7['maxHeight'] = NULL;
$arguments7['absolute'] = false;
$arguments7['class'] = 'card-img-top height-img';
$array9 = array (
);$arguments7['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array9);
$arguments7['width'] = 200;

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
      ';
return $output6;
};
$arguments3 = array();
$arguments3['each'] = NULL;
$arguments3['as'] = NULL;
$arguments3['key'] = NULL;
$arguments3['reverse'] = false;
$arguments3['iteration'] = NULL;
$array5 = array (
);$arguments3['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_media', $array5);
$arguments3['as'] = 'file';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
      <div class="card-body">
        <h5 class="card-title">';
$array10 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_headline', $array10)]);

$output0 .= '</h5>
        <p class="card-text">';
$array11 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_description', $array11)]);

$output0 .= '</p>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return 'LoL Geri';
};
$arguments12 = array();
$arguments12['parameter'] = NULL;
$arguments12['target'] = '';
$arguments12['class'] = '';
$arguments12['title'] = '';
$arguments12['language'] = NULL;
$arguments12['additionalParams'] = '';
$arguments12['additionalAttributes'] = array (
);
$arguments12['useCacheHash'] = NULL;
$arguments12['addQueryString'] = false;
$arguments12['addQueryStringMethod'] = 'GET';
$arguments12['addQueryStringExclude'] = '';
$arguments12['absolute'] = false;
$arguments12['parts-as'] = 'typoLinkParts';
$arguments12['class'] = 'btn btn-primary buttonlol';
$array14 = array (
);$arguments12['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_link', $array14);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
      </div>
  </div>
</div>';

return $output0;
}


}
#