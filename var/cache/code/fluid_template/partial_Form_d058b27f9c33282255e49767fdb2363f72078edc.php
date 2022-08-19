<?php

class partial_Form_d058b27f9c33282255e49767fdb2363f72078edc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="mask-field-form__inner" v-if="global.activeField.name">
    <div v-if="!activeFieldHasKeyError && activeMultiUseElements.length">
        <div class="callout callout-info">
            <div class="media">
                <div class="media-left"><span class="fa-stack fa-lg callout-icon"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span></div>
                <div class="media-body">
                    <p><b>';
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
$arguments1['key'] = 'tx_mask.content.multiuse';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</b><br>';
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
$arguments3['key'] = 'tx_mask.content.multiuse.description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</p>
                    <p class="mb-0"><a href="#" @click.prevent="openMultiUsageModal" class="btn btn-sm btn-primary">';
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
$arguments5['key'] = 'tx_mask.showMultiuseElements';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</a></p>
                </div>
            </div>
        </div>
    </div>
    <div v-if="global.activeField.name == \'richtext\' && !optionalExtensionStatus.rte_ckeditor">
        <div class="callout callout-warning">
            <div class="media">
                <div class="media-left"><span class="fa-stack fa-lg callout-icon"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span></div>
                <div class="media-body">
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
$arguments7['key'] = 'tx_mask.missing_extension.ckeditor';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '
                </div>
            </div>
        </div>
    </div>
    <div v-if="global.activeField.name != \'linebreak\'" class="mask-field-form__tabpanel" role="tabpanel">
        <ul class="nav nav-tabs" role="tablist" data-store-last-tab="1">
            <li v-for="(tab, key) in fieldTabs" role="presentation" :class="{active: key === global.currentTab, \'has-validation-error\': key == \'general\' && activeFieldHasKeyError}" v-if="key == \'general\' || !isActiveCoreField">
                <a role="tab" href="#" @click.prevent="global.currentTab = key" :class="';

$output0 .= '{active: key === global.currentTab}';

$output0 .= '">
                    {{ language.tabs[key] }}
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="default_';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array9)]);

$output0 .= '">
                <div v-if="global.currentTab == \'general\'" class="form-section">

                    <div class="row" v-if="chooseFieldVisible">
                        <div class="form-group col-sm-12 col-xl-6">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['section'] = NULL;
$arguments10['partial'] = NULL;
$arguments10['delegate'] = NULL;
$arguments10['renderable'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$arguments10['default'] = NULL;
$arguments10['contentAs'] = NULL;
$arguments10['debug'] = true;
$arguments10['partial'] = 'Form/KeySelect';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
                        </div>
                    </div>

                    <div v-if="overrideLabelVisible" class="row">
                        <div class="form-group col-sm-12 col-xl-6">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['section'] = NULL;
$arguments12['partial'] = NULL;
$arguments12['delegate'] = NULL;
$arguments12['renderable'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['optional'] = false;
$arguments12['default'] = NULL;
$arguments12['contentAs'] = NULL;
$arguments12['debug'] = true;
$arguments12['partial'] = 'Form/OverrideLabel';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
                        </div>
                    </div>

                    <div v-if="overrideDescriptionVisible" class="row">
                        <div class="form-group col-sm-12 col-xl-6">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['section'] = NULL;
$arguments14['partial'] = NULL;
$arguments14['delegate'] = NULL;
$arguments14['renderable'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['optional'] = false;
$arguments14['default'] = NULL;
$arguments14['contentAs'] = NULL;
$arguments14['debug'] = true;
$arguments14['partial'] = 'Form/OverrideDescription';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
                        </div>
                    </div>

                    <div class="row" v-if="keyFieldVisible || maskFieldGeneralTabOpen">
                        <div v-if="keyFieldVisible" :class="[\'form-group\', \'col-sm-12 col-xl-6\', ';

$output0 .= '{\'has-error\': activeFieldHasKeyError}';

$output0 .= ']">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['section'] = NULL;
$arguments16['partial'] = NULL;
$arguments16['delegate'] = NULL;
$arguments16['renderable'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$arguments16['default'] = NULL;
$arguments16['contentAs'] = NULL;
$arguments16['debug'] = true;
$arguments16['partial'] = 'Form/Key';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
                        </div>
                        <div v-if="maskFieldGeneralTabOpen" :class="[\'form-group\', \'col-sm-12 col-xl-6\', ';

$output0 .= '{\'has-error\': activeTabHasEmptyLabel}';

$output0 .= ']">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['renderable'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['debug'] = true;
$arguments18['partial'] = 'Form/Label';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
                        </div>
                    </div>

                    <div v-if="maskFieldGeneralTabOpen" class="row">
                        <div class="form-group col-sm-12 col-xl-6">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['debug'] = true;
$arguments20['partial'] = 'Form/Description';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
                        </div>
                        <div v-if="![\'palette\', \'tab\'].includes(global.activeField.name)" class="form-group col-sm-12 col-xl-6">
                            <label class="t3js-formengine-label">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['key'] = NULL;
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['languageKey'] = NULL;
$arguments22['alternativeLanguageKeys'] = NULL;
$arguments22['key'] = 'tx_mask.reset_settings';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output0 .= '
                            </label>
                            <div class="t3js-formengine-field-item">
                                <span class="formengine-field-item-description text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['key'] = NULL;
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['languageKey'] = NULL;
$arguments24['alternativeLanguageKeys'] = NULL;
$arguments24['key'] = 'tx_mask.reset_settings_description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output0 .= '</span>
                            </div>
                            <div class="reset-button">
                                <a @click="resetActiveField" class="btn btn-default">';
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
$arguments26['key'] = 'tx_mask.reset_button';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output0 .= '</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div v-if="!isActiveCoreField" v-for="(row, tcaKey) in tabs[global.activeField.name][global.currentTab]" class="form-section">
                    <div class="row">
                        <form-field
                            v-for="(column, tcaKey) in row"
                            :key="global.activeField.uid + \'.\' + tcaKey + ticks"
                            :id="global.activeField.uid + \'.\' + tcaKey"
                            :global="global"
                            :language="language"
                            :icons="icons"
                            :tca-fields="tcaFields"
                            :online-media="onlineMedia"
                            :link-handler-list="linkHandlerList"
                            :tca-key="tcaKey"
                            :column="column"
                            :field-errors="fieldErrors"
                            :force-renderer="forceRenderer"
                        ></form-field>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';

return $output0;
}


}
#