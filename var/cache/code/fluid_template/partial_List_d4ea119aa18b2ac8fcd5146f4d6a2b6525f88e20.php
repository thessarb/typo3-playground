<?php

class partial_List_d4ea119aa18b2ac8fcd5146f4d6a2b6525f88e20 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div v-show="loaded" v-if="mode == \'list\'" class="mask-list" style="display: none;">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['renderable'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['debug'] = true;
$arguments1['partial'] = 'List/Header';
$arguments1['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <div class="mask-elements">
        <div class="mask-elements__column mask-elements__column--elements">
            <div class="mask-elements__header">
                <div class="mask-elements__header-icon-wrap">
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
$arguments4['identifier'] = 'mimetypes-x-content-text';
$arguments4['size'] = 'default';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
                    <div class="mask-elements__header-icon-label">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['key'] = NULL;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['languageKey'] = NULL;
$arguments6['alternativeLanguageKeys'] = NULL;
$arguments6['key'] = 'tx_mask.all.contentelements';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '
                    </div>
                </div>
                <div class="form-control-wrap mask-elements__header-search">
                    <div class="form-control-holder">
                        <div class="form-control-icon">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['identifier'] = NULL;
$arguments8['size'] = 'small';
$arguments8['overlay'] = NULL;
$arguments8['state'] = 'default';
$arguments8['alternativeMarkupIdentifier'] = NULL;
$arguments8['identifier'] = 'apps-toolbar-menu-search';
$arguments8['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
                        </div>
                        <div class="form-control-clearable">
                            <input class="form-control" v-model="searchString" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['key'] = NULL;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['languageKey'] = NULL;
$arguments10['alternativeLanguageKeys'] = NULL;
$arguments10['key'] = 'tx_mask.search';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output0 .= '" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['languageKey'] = NULL;
$arguments12['alternativeLanguageKeys'] = NULL;
$arguments12['key'] = 'tx_mask.search_content_elements';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output0 .= '" autocomplete="off" spellcheck="off" autocapitalize="none"/>
                            <button v-show="searchString !== \'\'" @click="searchString = \'\'" class="close" type="button" tabindex="-1">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['identifier'] = NULL;
$arguments14['size'] = 'small';
$arguments14['overlay'] = NULL;
$arguments14['state'] = 'default';
$arguments14['alternativeMarkupIdentifier'] = NULL;
$arguments14['identifier'] = 'actions-close';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
                            </button>
                        </div>
                    </div>
                </div>
                <div v-if="missingFilesOrFolders.missing" @click="showMissingFilesOrFolder" class="mask-elements__missing btn btn-warning"><i class="fa fa-warning"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['key'] = NULL;
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['languageKey'] = NULL;
$arguments16['alternativeLanguageKeys'] = NULL;
$arguments16['key'] = 'tx_mask.all.missingFilesOrFolders';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output0 .= '</div>
                <div @click="openNew" class="btn btn-success"><i class="fa fa-plus"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['key'] = 'tx_mask.all.create_content_element';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output0 .= '</div>
            </div>
            <div class="mask-elements__table-wrap">
                <table class="table table-hover mask-elements__table">
                    <tr v-for="item in filteredElements" :class="{\'has-warning\': !item.templateExists, \'disabled\': item.hidden}">
                        <td>
                            <div class="mask-elements__element-name" @click="openEdit(\'tt_content\', item)" :title="item.label">
                                <div v-html="item.iconMarkup" class="mask-elements__element-name-icon" ></div><span class="mask-elements__element-name-label">';

$output0 .= '{{ item.translatedLabel }}';

$output0 .= '<br><code>[';

$output0 .= '{{ item.key }}';

$output0 .= ']</code></span>
                            </div>
                        </td>
                        <td>
                            <div class="mask-elements__description">';

$output0 .= '{{ item.translatedDescription }}';

$output0 .= '</div>
                        </td>
                        <td class="mask-elements__count"><span :title="language.usage">';

$output0 .= '{{ item.count }}';

$output0 .= '</span></td>
                        <td class="mask-elements__buttons">
                            <button-bar
                                    v-if="loaded"
                                    @toggle="loadElements"
                                    :element="item"
                                    :icons="icons"
                                    :show-messages="showMessages"
                                    :open-edit="openEdit"
                                    :open-delete-dialog="openDeleteDialog"
                                    :language="language"
                                    table="tt_content"
                            ></button-bar>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="mask-elements__column mask-elements__column--templates">
            <div class="mask-elements__header">
                <div class="mask-elements__header-icon-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['identifier'] = NULL;
$arguments20['size'] = 'small';
$arguments20['overlay'] = NULL;
$arguments20['state'] = 'default';
$arguments20['alternativeMarkupIdentifier'] = NULL;
$arguments20['identifier'] = 'mimetypes-x-backend_layout';
$arguments20['size'] = 'default';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
                    <div class="mask-elements__header-icon-label">
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
$arguments22['key'] = 'tx_mask.all.pagetemplates';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output0 .= '
                    </div>
                </div>
            </div>
            <div class="mask-elements__table-wrap">
                <table class="table table-hover mask-elements__table">
                    <tr v-for="(item, key) in backendLayouts">
                        <td>
                            <div class="mask-elements__element-name" @click="openEdit(\'pages\', item)" :title="item.title">
                                <img v-if="item.icon" :src="item.icon" class="mask-elements__element-name-icon" width="32"/>
                                <div v-else class="mask-elements__element-name-icon">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['identifier'] = NULL;
$arguments24['size'] = 'small';
$arguments24['overlay'] = NULL;
$arguments24['state'] = 'default';
$arguments24['alternativeMarkupIdentifier'] = NULL;
$arguments24['identifier'] = 'module-templates';
$arguments24['size'] = 'default';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '
                                </div>
                                </img><span class="mask-elements__element-name-label">';

$output0 .= '{{ item.title }}';

$output0 .= '<br><code>[';

$output0 .= '{{ item.key }}';

$output0 .= ']</code></span>
                            </div>
                        </td>
                        <td>
                            <div class="mask-elements__description" v-if="item.description">';

$output0 .= '{{ item.description }}';

$output0 .= '</div>
                        </td>
                        <td>
                            <button-bar
                                    v-if="loaded"
                                    :element="item"
                                    :icons="icons"
                                    :show-messages="showMessages"
                                    :open-edit="openEdit"
                                    :open-delete-dialog="openDeleteDialog"
                                    :language="language"
                                    table="pages"
                            ></button-bar>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['section'] = NULL;
$arguments26['partial'] = NULL;
$arguments26['delegate'] = NULL;
$arguments26['renderable'] = NULL;
$arguments26['arguments'] = array (
);
$arguments26['optional'] = false;
$arguments26['default'] = NULL;
$arguments26['contentAs'] = NULL;
$arguments26['debug'] = true;
$arguments26['partial'] = 'List/Footer';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '
</div>

<div v-show="loaded" v-if="mode == \'setup\'" class="mask-list" style="display: none;">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['section'] = NULL;
$arguments28['partial'] = NULL;
$arguments28['delegate'] = NULL;
$arguments28['renderable'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$arguments28['default'] = NULL;
$arguments28['contentAs'] = NULL;
$arguments28['debug'] = true;
$arguments28['partial'] = 'List/Header';
$arguments28['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
    <div class="mask-setup-incomplete">
        <div class="mask-setup-incomplete__content">
            <div class="mask-setup-incomplete__text">
                <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['key'] = NULL;
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['languageKey'] = NULL;
$arguments31['alternativeLanguageKeys'] = NULL;
$arguments31['key'] = 'tx_mask.setup_incomplete';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output0 .= '</h1>
                <p>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['languageKey'] = NULL;
$arguments35['alternativeLanguageKeys'] = NULL;
$arguments35['key'] = 'tx_mask.setup_incomplete.text';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);
};
$arguments33 = array();
$arguments33['value'] = NULL;

$output0 .= isset($arguments33['value']) ? $arguments33['value'] : $renderChildrenClosure34();

$output0 .= '</p>
            </div>
        </div>
        <form class="form-horizontal mask-setup-incomplete__form">
            <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['key'] = NULL;
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['languageKey'] = NULL;
$arguments37['alternativeLanguageKeys'] = NULL;
$arguments37['key'] = 'tx_mask.auto_configuration';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output0 .= '</h2>
            <p>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['languageKey'] = NULL;
$arguments41['alternativeLanguageKeys'] = NULL;
$arguments41['key'] = 'tx_mask.auto_configuration.text';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
};
$arguments39 = array();
$arguments39['value'] = NULL;

$output0 .= isset($arguments39['value']) ? $arguments39['value'] : $renderChildrenClosure40();

$output0 .= '</p>
            <div class="form-group row">
                <label for="extension-key" class="col-sm-2 control-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['languageKey'] = NULL;
$arguments43['alternativeLanguageKeys'] = NULL;
$arguments43['key'] = 'tx_mask.extension_key';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output0 .= ':</label>
                <div class="col-sm-8">
                    <input v-model="setupConfiguration.extension" id="extension-key" class="form-control">
                </div>
                <div class="col-sm-2 d-flex align-items-center"><span class="text-danger" v-if="setupConfiguration.error">';

$output0 .= '{{ setupConfiguration.error }}';

$output0 .= '</span></div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2 control-label"><b>Loader <a href="https://docs.typo3.org/p/mask/mask/main/en-us/API/Loader.html#available-loaders" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['key'] = NULL;
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['languageKey'] = NULL;
$arguments45['alternativeLanguageKeys'] = NULL;
$arguments45['key'] = 'tx_mask.learn_about_loaders';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output0 .= '" target="_blank"><i class="fa fa-info-circle"></i></a> :</b></div>
                <div class="col-sm-10">
                    <div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['key'] = NULL;
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['languageKey'] = NULL;
$arguments47['alternativeLanguageKeys'] = NULL;
$arguments47['key'] = 'tx_mask.loader.description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output0 .= '</div>
                    <div>
                        <label for="json" class="control-label">JsonLoader</label>
                        <input v-model="setupConfiguration.loader" id="json" type="radio" name="loader" value="json"/>
                        <code>[json]</code>
                    </div>
                    <div>
                        <label for="json-split" class="control-label">JsonSplitLoader</label>
                        <input v-model="setupConfiguration.loader" id="json-split" type="radio" name="loader" value="json-split"/>
                        <code>[json-split]</code>
                    </div>
                </div>
            </div>
            <input @click.prevent="submitAutoConfiguration" type="submit" class="btn btn-primary" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['languageKey'] = NULL;
$arguments49['alternativeLanguageKeys'] = NULL;
$arguments49['key'] = 'tx_mask.submit';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output0 .= '">
        </form>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['section'] = NULL;
$arguments51['partial'] = NULL;
$arguments51['delegate'] = NULL;
$arguments51['renderable'] = NULL;
$arguments51['arguments'] = array (
);
$arguments51['optional'] = false;
$arguments51['default'] = NULL;
$arguments51['contentAs'] = NULL;
$arguments51['debug'] = true;
$arguments51['partial'] = 'List/Footer';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output0 .= '
</div>
';

return $output0;
}


}
#