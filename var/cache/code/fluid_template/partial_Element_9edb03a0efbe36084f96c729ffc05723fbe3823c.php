<?php

class partial_Element_9edb03a0efbe36084f96c729ffc05723fbe3823c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div :class="[\'form-group\', {\'has-error\': fieldErrors.elementKey || !fieldErrors.elementKeyAvailable}]">
    <label class="t3js-formengine-label" for="meta_key">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'tx_mask.all.fieldkey';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '*
    </label>
    <div class="t3js-formengine-field-item">
        <span class="formengine-field-item-description text-muted">';
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
$arguments3['key'] = 'tx_mask.all.fieldkey.description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</span>
        <div class="form-control-wrap">
            <element-key :element="element" :mode="mode"></element-key>
        </div>
    </div>
</div>

<div :class="[\'form-group\', ';

$output0 .= '{\'has-error\': fieldErrors.elementLabel}';

$output0 .= ']">
    <label class="t3js-formengine-label" for="meta_label">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['languageKey'] = NULL;
$arguments5['alternativeLanguageKeys'] = NULL;
$arguments5['key'] = 'tx_mask.content.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '*
    </label>
    <div class="t3js-formengine-field-item">
        <div class="form-control-wrap">
            <input
                v-model="element.label"
                id="meta_label"
                class="form-control"
                required="required"
            />
        </div>
    </div>
</div>

<div class="form-group">
    <label class="t3js-formengine-label" for="meta_shortlabel">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'tx_mask.all.shorttitle';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '
    </label>
    <div class="t3js-formengine-field-item">
        <div class="form-control-wrap">
            <input
                v-model="element.shortLabel"
                id="meta_shortlabel"
                class="form-control"
                required="required"
            />
        </div>
    </div>
</div>

<div class="form-group">
    <label class="t3js-formengine-label" for="meta_description">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'tx_mask.all.description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '
    </label>
    <div class="t3js-formengine-field-item">
        <div class="form-control-wrap">
            <textarea
                v-model="element.description"
                id="meta_description"
                class="form-control"
                required="required"
                rows="4"
            >
            </textarea>
        </div>
    </div>
</div>

<div class="row mb-1">
    <font-icon-picker :element="element" :label="language.icon" :fa-icons="faIcons" property="icon" ref="iconPicker"></font-icon-picker>
    <element-color-picker :element="element" :label="language.color" property="color"></element-color-picker>
</div>
<div v-if="global.typo3Version > 10" class="row mb-1">
    <font-icon-picker :element="element" :label="language.iconOverlay" :fa-icons="faIcons" property="iconOverlay" ref="iconOverlayPicker"></font-icon-picker>
    <element-color-picker :element="element" :label="language.colorOverlay" property="colorOverlay"></element-color-picker>
</div>
<div class="checkbox checkbox-type-toggle form-check form-switch">
    <input id="elementSaveAndClose" class="checkbox-input form-check-input" v-model="element.saveAndClose" type="checkbox" :true-value="1" :false-value="0">
    <label class="checkbox-label form-check-label" for="elementSaveAndClose">
        <span class="checkbox-label-text form-check-label-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'tx_mask.saveAndClose';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '</span>
    </label>
</div>
';

return $output0;
}


}
#