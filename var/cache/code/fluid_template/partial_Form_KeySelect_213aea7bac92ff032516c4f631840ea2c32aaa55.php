<?php

class partial_Form_KeySelect_213aea7bac92ff032516c4f631840ea2c32aaa55 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<label class="t3js-formengine-label" for="form_choosefield">
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
$arguments1['key'] = 'tx_mask.field.choosefield';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
</label>
<div class="t3js-formengine-field-item">
    <div class="form-control-wrap">
        <select
            v-model="global.activeField.key"
            :disabled="!global.activeField.newField"
            @change="validateKey(global.activeField); loadField();"
            id="form_choosefield"
            class="form-control form-select"
        >
            <optgroup class="c-divider" label="New">
                <option :value="global.maskPrefix">
                    ';
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
$arguments3['key'] = 'tx_mask.field.newfield';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
                </option>
            </optgroup>
            <optgroup label="Current new key" v-if="global.activeField.key !== global.maskPrefix && !(getAvailableTcaKeys()[global.activeField.name].includes(global.activeField.key))">
                <option :value="global.activeField.key">';

$output0 .= '{{ global.activeField.key }}';

$output0 .= '</option>
            </optgroup>
            <optgroup v-if="availableCoreTcaForActiveField.length" class="c-divider" label="Core fields">
                <option v-for="item in availableCoreTcaForActiveField" :value="item.field">
                    ';

$output0 .= '{{ item.label }}';

$output0 .= ' (';

$output0 .= '{{ item.field }}';

$output0 .= ')
                </option>
            </optgroup>
            <optgroup v-if="availableMaskTcaForActiveField.length" class="c-divider" label="Mask fields">
                <option v-for="item in availableMaskTcaForActiveField" :value="item.field">
                    ';

$output0 .= '{{ item.label }}';

$output0 .= ' (';

$output0 .= '{{ keyWithoutMask(item.field) }}';

$output0 .= ')
                </option>
            </optgroup>
        </select>
    </div>
</div>
';

return $output0;
}


}
#