<?php

class partial_List_Header_f97b2701162a42a7508c99f1eae264f19ffaa372 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="mask-list__header">
    <div class="mask-list__logo-wrap">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['aria'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['alt'] = NULL;
$arguments1['ismap'] = NULL;
$arguments1['longdesc'] = NULL;
$arguments1['usemap'] = NULL;
$arguments1['loading'] = NULL;
$arguments1['src'] = '';
$arguments1['treatIdAsReference'] = false;
$arguments1['image'] = NULL;
$arguments1['crop'] = NULL;
$arguments1['cropVariant'] = 'default';
$arguments1['fileExtension'] = NULL;
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['minWidth'] = NULL;
$arguments1['minHeight'] = NULL;
$arguments1['maxWidth'] = NULL;
$arguments1['maxHeight'] = NULL;
$arguments1['absolute'] = false;
$arguments1['src'] = 'EXT:mask/Resources/Public/Icons/Extension.svg';
$arguments1['class'] = 'mask-list__logo';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= ' <span class="mask-list__label">Mask</span>
    </div>
    <div class="mask-list__docs">
        <a href="https://docs.typo3.org/p/mask/mask/main/en-us/" target="_blank">Documentation <i class="fa fa-book"></i></a>
    </div>
    <div class="mask-list__settings-wrap">
        <a href="';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settingsUrl', $array3)]);

$output0 .= '">
            <div class="mask-list__settings-label">Settings</div>
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['identifier'] = NULL;
$arguments4['size'] = 'small';
$arguments4['overlay'] = NULL;
$arguments4['state'] = 'default';
$arguments4['alternativeMarkupIdentifier'] = NULL;
$arguments4['identifier'] = 'actions-system-extension-configure';
$arguments4['size'] = 'default';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
        </a>
    </div>
</div>
';

return $output0;
}


}
#