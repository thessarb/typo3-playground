<?php

class ViewHelpers_Be_Widget_Paginate_action_index_146e8f5b9da37b9ec54a887d346cb04c312d2f4a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <nav class="pagination-wrap">
        <ul class="pagination pagination-block">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['useCacheHash'] = NULL;
$arguments31['addQueryStringMethod'] = NULL;
$arguments31['action'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['ajax'] = false;
// Rendering Array
$array33 = array();
$array33['currentPage'] = 1;
$arguments31['arguments'] = $array33;

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output30 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['languageKey'] = NULL;
$arguments34['alternativeLanguageKeys'] = NULL;
$arguments34['key'] = 'widget.pagination.first';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output30 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['identifier'] = NULL;
$arguments36['size'] = 'small';
$arguments36['overlay'] = NULL;
$arguments36['state'] = 'default';
$arguments36['alternativeMarkupIdentifier'] = NULL;
$arguments36['identifier'] = 'actions-view-paging-first';

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output30 .= '
                        </a>
                    </li>
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['useCacheHash'] = NULL;
$arguments38['addQueryStringMethod'] = NULL;
$arguments38['action'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['section'] = '';
$arguments38['format'] = '';
$arguments38['ajax'] = false;
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array41);
$arguments38['arguments'] = $array40;

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output30 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['languageKey'] = NULL;
$arguments42['alternativeLanguageKeys'] = NULL;
$arguments42['key'] = 'widget.pagination.previous';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output30 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['identifier'] = NULL;
$arguments44['size'] = 'small';
$arguments44['overlay'] = NULL;
$arguments44['state'] = 'default';
$arguments44['alternativeMarkupIdentifier'] = NULL;
$arguments44['identifier'] = 'actions-view-paging-previous';

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output30 .= '
                        </a>
                    </li>
                ';
return $output30;
};
$arguments28 = array();

$output27 .= '';

$output27 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['identifier'] = NULL;
$arguments49['size'] = 'small';
$arguments49['overlay'] = NULL;
$arguments49['state'] = 'default';
$arguments49['alternativeMarkupIdentifier'] = NULL;
$arguments49['identifier'] = 'actions-view-paging-first';

$output48 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
                        </span>
                    </li>
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['identifier'] = NULL;
$arguments51['size'] = 'small';
$arguments51['overlay'] = NULL;
$arguments51['state'] = 'default';
$arguments51['alternativeMarkupIdentifier'] = NULL;
$arguments51['identifier'] = 'actions-view-paging-previous';

$output48 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output48 .= '
                        </span>
                    </li>
                ';
return $output48;
};
$arguments46 = array();
$arguments46['if'] = NULL;

$output27 .= '';

$output27 .= '
            ';
return $output27;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages', $array25);

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['useCacheHash'] = NULL;
$arguments4['addQueryStringMethod'] = NULL;
$arguments4['action'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['ajax'] = false;
// Rendering Array
$array6 = array();
$array6['currentPage'] = 1;
$arguments4['arguments'] = $array6;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '" title="';
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
$arguments7['key'] = 'widget.pagination.first';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output3 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['identifier'] = NULL;
$arguments9['size'] = 'small';
$arguments9['overlay'] = NULL;
$arguments9['state'] = 'default';
$arguments9['alternativeMarkupIdentifier'] = NULL;
$arguments9['identifier'] = 'actions-view-paging-first';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output3 .= '
                        </a>
                    </li>
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['useCacheHash'] = NULL;
$arguments11['addQueryStringMethod'] = NULL;
$arguments11['action'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['ajax'] = false;
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array14);
$arguments11['arguments'] = $array13;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output3 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$arguments15['key'] = 'widget.pagination.previous';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output3 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['identifier'] = NULL;
$arguments17['size'] = 'small';
$arguments17['overlay'] = NULL;
$arguments17['state'] = 'default';
$arguments17['alternativeMarkupIdentifier'] = NULL;
$arguments17['identifier'] = 'actions-view-paging-previous';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output3 .= '
                        </a>
                    </li>
                ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    <li class="disabled">
                        <span>
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
$arguments20['identifier'] = 'actions-view-paging-first';

$output19 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                        </span>
                    </li>
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['identifier'] = NULL;
$arguments22['size'] = 'small';
$arguments22['overlay'] = NULL;
$arguments22['state'] = 'default';
$arguments22['alternativeMarkupIdentifier'] = NULL;
$arguments22['identifier'] = 'actions-view-paging-previous';

$output19 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output19 .= '
                        </span>
                    </li>
                ';
return $output19;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
            <li>
                <span>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                            ';
$array67 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recordsLabel', $array67)]);

$output66 .= '
                        ';
return $output66;
};
$arguments64 = array();

$output63 .= '';

$output63 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'widget.pagination.records';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '
                        ';
return $output70;
};
$arguments68 = array();
$arguments68['if'] = NULL;

$output63 .= '';

$output63 .= '
                    ';
return $output63;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('recordsLabel', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                            ';
$array56 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recordsLabel', $array56)]);

$output55 .= '
                        ';
return $output55;
};
$arguments53['__elseClosures'][] = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'widget.pagination.records';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= '
                        ';
return $output57;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output0 .= '
                    ';
$array73 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.startRecord', $array73)]);

$output0 .= ' - ';
$array74 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.endRecord', $array74)]);

$output0 .= '
                </span>
            </li>
            <li>
                <span>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['key'] = NULL;
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['languageKey'] = NULL;
$arguments75['alternativeLanguageKeys'] = NULL;
$arguments75['key'] = 'widget.pagination.page';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output0 .= '

                    <form style="display:inline;"
                        data-global-event="submit"
                        data-action-navigate="$form=~s/$value/"
                        data-navigate-value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['useCacheHash'] = NULL;
$arguments77['addQueryStringMethod'] = NULL;
$arguments77['action'] = NULL;
$arguments77['arguments'] = array (
);
$arguments77['section'] = '';
$arguments77['format'] = '';
$arguments77['ajax'] = false;
// Rendering Array
$array79 = array();
$array79['currentPage'] = '$[value]';
$arguments77['arguments'] = $array79;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output0 .= '"
                        data-value-selector="input[name=\'paginator-target-page\']">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['aria'] = NULL;
$arguments80['name'] = NULL;
$arguments80['value'] = NULL;
$arguments80['property'] = NULL;
$arguments80['autofocus'] = NULL;
$arguments80['disabled'] = NULL;
$arguments80['maxlength'] = NULL;
$arguments80['readonly'] = NULL;
$arguments80['size'] = NULL;
$arguments80['placeholder'] = NULL;
$arguments80['pattern'] = NULL;
$arguments80['errorClass'] = 'f3-form-error';
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['required'] = false;
$arguments80['type'] = 'text';
// Rendering Array
$array82 = array();
$array82['min'] = 1;
$array83 = array (
);$array82['data-number-of-pages'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array83);
$arguments80['additionalAttributes'] = $array82;
$arguments80['name'] = 'paginator-target-page';
$arguments80['class'] = 'form-control input-sm paginator-input';
$arguments80['size'] = 5;
$array84 = array (
);$arguments80['value'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array84);
$arguments80['type'] = 'number';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output0 .= '
                    </form>

                    / ';
$array85 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array85)]);

$output0 .= '
                </span>
            </li>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['useCacheHash'] = NULL;
$arguments117['addQueryStringMethod'] = NULL;
$arguments117['action'] = NULL;
$arguments117['arguments'] = array (
);
$arguments117['section'] = '';
$arguments117['format'] = '';
$arguments117['ajax'] = false;
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array120);
$arguments117['arguments'] = $array119;

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output116 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['key'] = NULL;
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$arguments121['languageKey'] = NULL;
$arguments121['alternativeLanguageKeys'] = NULL;
$arguments121['key'] = 'widget.pagination.next';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext)]);

$output116 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['identifier'] = NULL;
$arguments123['size'] = 'small';
$arguments123['overlay'] = NULL;
$arguments123['state'] = 'default';
$arguments123['alternativeMarkupIdentifier'] = NULL;
$arguments123['identifier'] = 'actions-view-paging-next';

$output116 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output116 .= '
                        </a>
                    </li>
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['useCacheHash'] = NULL;
$arguments125['addQueryStringMethod'] = NULL;
$arguments125['action'] = NULL;
$arguments125['arguments'] = array (
);
$arguments125['section'] = '';
$arguments125['format'] = '';
$arguments125['ajax'] = false;
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array128);
$arguments125['arguments'] = $array127;

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output116 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['key'] = NULL;
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['languageKey'] = NULL;
$arguments129['alternativeLanguageKeys'] = NULL;
$arguments129['key'] = 'widget.pagination.last';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output116 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['identifier'] = NULL;
$arguments131['size'] = 'small';
$arguments131['overlay'] = NULL;
$arguments131['state'] = 'default';
$arguments131['alternativeMarkupIdentifier'] = NULL;
$arguments131['identifier'] = 'actions-view-paging-last';

$output116 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output116 .= '
                        </a>
                    </li>
                ';
return $output116;
};
$arguments114 = array();

$output113 .= '';

$output113 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['identifier'] = NULL;
$arguments136['size'] = 'small';
$arguments136['overlay'] = NULL;
$arguments136['state'] = 'default';
$arguments136['alternativeMarkupIdentifier'] = NULL;
$arguments136['identifier'] = 'actions-view-paging-next';

$output135 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
                        </span>
                    </li>
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['identifier'] = NULL;
$arguments138['size'] = 'small';
$arguments138['overlay'] = NULL;
$arguments138['state'] = 'default';
$arguments138['alternativeMarkupIdentifier'] = NULL;
$arguments138['identifier'] = 'actions-view-paging-last';

$output135 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output135 .= '
                        </span>
                    </li>
                ';
return $output135;
};
$arguments133 = array();
$arguments133['if'] = NULL;

$output113 .= '';

$output113 .= '
            ';
return $output113;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages', $array111);

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);
$arguments86['__thenClosure'] = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['useCacheHash'] = NULL;
$arguments89['addQueryStringMethod'] = NULL;
$arguments89['action'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['section'] = '';
$arguments89['format'] = '';
$arguments89['ajax'] = false;
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array92);
$arguments89['arguments'] = $array91;

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output88 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'widget.pagination.next';

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output88 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['identifier'] = NULL;
$arguments95['size'] = 'small';
$arguments95['overlay'] = NULL;
$arguments95['state'] = 'default';
$arguments95['alternativeMarkupIdentifier'] = NULL;
$arguments95['identifier'] = 'actions-view-paging-next';

$output88 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output88 .= '
                        </a>
                    </li>
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['useCacheHash'] = NULL;
$arguments97['addQueryStringMethod'] = NULL;
$arguments97['action'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['section'] = '';
$arguments97['format'] = '';
$arguments97['ajax'] = false;
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array100);
$arguments97['arguments'] = $array99;

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output88 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['key'] = NULL;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['languageKey'] = NULL;
$arguments101['alternativeLanguageKeys'] = NULL;
$arguments101['key'] = 'widget.pagination.last';

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output88 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['identifier'] = NULL;
$arguments103['size'] = 'small';
$arguments103['overlay'] = NULL;
$arguments103['state'] = 'default';
$arguments103['alternativeMarkupIdentifier'] = NULL;
$arguments103['identifier'] = 'actions-view-paging-last';

$output88 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output88 .= '
                        </a>
                    </li>
                ';
return $output88;
};
$arguments86['__elseClosures'][] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['identifier'] = NULL;
$arguments106['size'] = 'small';
$arguments106['overlay'] = NULL;
$arguments106['state'] = 'default';
$arguments106['alternativeMarkupIdentifier'] = NULL;
$arguments106['identifier'] = 'actions-view-paging-next';

$output105 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
                        </span>
                    </li>
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['identifier'] = NULL;
$arguments108['size'] = 'small';
$arguments108['overlay'] = NULL;
$arguments108['state'] = 'default';
$arguments108['alternativeMarkupIdentifier'] = NULL;
$arguments108['identifier'] = 'actions-view-paging-last';

$output105 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output105 .= '
                        </span>
                    </li>
                ';
return $output105;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output0 .= '
            <li>
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['useCacheHash'] = NULL;
$arguments140['addQueryStringMethod'] = NULL;
$arguments140['action'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['section'] = '';
$arguments140['format'] = '';
$arguments140['ajax'] = false;
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array143);
$arguments140['arguments'] = $array142;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext)]);

$output0 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['key'] = NULL;
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$arguments144['languageKey'] = NULL;
$arguments144['alternativeLanguageKeys'] = NULL;
$arguments144['key'] = 'widget.pagination.refresh';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext)]);

$output0 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['identifier'] = NULL;
$arguments146['size'] = 'small';
$arguments146['overlay'] = NULL;
$arguments146['state'] = 'default';
$arguments146['alternativeMarkupIdentifier'] = NULL;
$arguments146['identifier'] = 'actions-refresh';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output0 .= '
                </a>
            </li>
        </ul>
    </nav>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output148 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['section'] = NULL;
$arguments155['partial'] = NULL;
$arguments155['delegate'] = NULL;
$arguments155['renderable'] = NULL;
$arguments155['arguments'] = array (
);
$arguments155['optional'] = false;
$arguments155['default'] = NULL;
$arguments155['contentAs'] = NULL;
$arguments155['debug'] = true;
$arguments155['section'] = 'paginator';
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination', $array158);
$array159 = array (
);$array157['recordsLabel'] = $renderingContext->getVariableProvider()->getByPath('configuration.recordsLabel', $array159);
$arguments155['arguments'] = $array157;

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
';
return $output154;
};
$arguments149 = array();
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$arguments149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array151 = array();
$array152 = array (
);$array151['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertAbove', $array152);

$expression153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array151)
					),
					$renderingContext
				);
$arguments149['__thenClosure'] = $renderChildrenClosure150;

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['pageTitle'] = '';
$arguments160['includeCssFiles'] = NULL;
$arguments160['includeJsFiles'] = NULL;
$arguments160['addJsInlineLabels'] = NULL;
$arguments160['includeRequireJsModules'] = NULL;
$arguments160['addInlineSettings'] = NULL;
// Rendering Array
$array162 = array();
$array162['0'] = 'TYPO3/CMS/Backend/ActionDispatcher';
$arguments160['includeRequireJsModules'] = $array162;

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);

$output148 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['arguments'] = array (
);
$array165 = array (
);$arguments163['arguments'] = $renderingContext->getVariableProvider()->getByPath('contentArguments', $array165);

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output148 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['section'] = NULL;
$arguments172['partial'] = NULL;
$arguments172['delegate'] = NULL;
$arguments172['renderable'] = NULL;
$arguments172['arguments'] = array (
);
$arguments172['optional'] = false;
$arguments172['default'] = NULL;
$arguments172['contentAs'] = NULL;
$arguments172['debug'] = true;
$arguments172['section'] = 'paginator';
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination', $array175);
$array176 = array (
);$array174['recordsLabel'] = $renderingContext->getVariableProvider()->getByPath('configuration.recordsLabel', $array176);
$arguments172['arguments'] = $array174;

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
';
return $output171;
};
$arguments166 = array();
$arguments166['then'] = NULL;
$arguments166['else'] = NULL;
$arguments166['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertBelow', $array169);

$expression170 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments166['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments166['__thenClosure'] = $renderChildrenClosure167;

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output148 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
    <nav class="pagination-wrap">
        <ul class="pagination pagination-block">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['useCacheHash'] = NULL;
$arguments210['addQueryStringMethod'] = NULL;
$arguments210['action'] = NULL;
$arguments210['arguments'] = array (
);
$arguments210['section'] = '';
$arguments210['format'] = '';
$arguments210['ajax'] = false;
// Rendering Array
$array212 = array();
$array212['currentPage'] = 1;
$arguments210['arguments'] = $array212;

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output209 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['key'] = NULL;
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$arguments213['languageKey'] = NULL;
$arguments213['alternativeLanguageKeys'] = NULL;
$arguments213['key'] = 'widget.pagination.first';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext)]);

$output209 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['identifier'] = NULL;
$arguments215['size'] = 'small';
$arguments215['overlay'] = NULL;
$arguments215['state'] = 'default';
$arguments215['alternativeMarkupIdentifier'] = NULL;
$arguments215['identifier'] = 'actions-view-paging-first';

$output209 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output209 .= '
                        </a>
                    </li>
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['useCacheHash'] = NULL;
$arguments217['addQueryStringMethod'] = NULL;
$arguments217['action'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['section'] = '';
$arguments217['format'] = '';
$arguments217['ajax'] = false;
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array220);
$arguments217['arguments'] = $array219;

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output209 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['key'] = NULL;
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$arguments221['languageKey'] = NULL;
$arguments221['alternativeLanguageKeys'] = NULL;
$arguments221['key'] = 'widget.pagination.previous';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output209 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['identifier'] = NULL;
$arguments223['size'] = 'small';
$arguments223['overlay'] = NULL;
$arguments223['state'] = 'default';
$arguments223['alternativeMarkupIdentifier'] = NULL;
$arguments223['identifier'] = 'actions-view-paging-previous';

$output209 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output209 .= '
                        </a>
                    </li>
                ';
return $output209;
};
$arguments207 = array();

$output206 .= '';

$output206 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['identifier'] = NULL;
$arguments228['size'] = 'small';
$arguments228['overlay'] = NULL;
$arguments228['state'] = 'default';
$arguments228['alternativeMarkupIdentifier'] = NULL;
$arguments228['identifier'] = 'actions-view-paging-first';

$output227 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
                        </span>
                    </li>
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['identifier'] = NULL;
$arguments230['size'] = 'small';
$arguments230['overlay'] = NULL;
$arguments230['state'] = 'default';
$arguments230['alternativeMarkupIdentifier'] = NULL;
$arguments230['identifier'] = 'actions-view-paging-previous';

$output227 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output227 .= '
                        </span>
                    </li>
                ';
return $output227;
};
$arguments225 = array();
$arguments225['if'] = NULL;

$output206 .= '';

$output206 .= '
            ';
return $output206;
};
$arguments180 = array();
$arguments180['then'] = NULL;
$arguments180['else'] = NULL;
$arguments180['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages', $array204);

$expression205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments180['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments180['__thenClosure'] = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['useCacheHash'] = NULL;
$arguments183['addQueryStringMethod'] = NULL;
$arguments183['action'] = NULL;
$arguments183['arguments'] = array (
);
$arguments183['section'] = '';
$arguments183['format'] = '';
$arguments183['ajax'] = false;
// Rendering Array
$array185 = array();
$array185['currentPage'] = 1;
$arguments183['arguments'] = $array185;

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output182 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['languageKey'] = NULL;
$arguments186['alternativeLanguageKeys'] = NULL;
$arguments186['key'] = 'widget.pagination.first';

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext)]);

$output182 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['identifier'] = NULL;
$arguments188['size'] = 'small';
$arguments188['overlay'] = NULL;
$arguments188['state'] = 'default';
$arguments188['alternativeMarkupIdentifier'] = NULL;
$arguments188['identifier'] = 'actions-view-paging-first';

$output182 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output182 .= '
                        </a>
                    </li>
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['useCacheHash'] = NULL;
$arguments190['addQueryStringMethod'] = NULL;
$arguments190['action'] = NULL;
$arguments190['arguments'] = array (
);
$arguments190['section'] = '';
$arguments190['format'] = '';
$arguments190['ajax'] = false;
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array193);
$arguments190['arguments'] = $array192;

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output182 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['key'] = NULL;
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['languageKey'] = NULL;
$arguments194['alternativeLanguageKeys'] = NULL;
$arguments194['key'] = 'widget.pagination.previous';

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext)]);

$output182 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['identifier'] = NULL;
$arguments196['size'] = 'small';
$arguments196['overlay'] = NULL;
$arguments196['state'] = 'default';
$arguments196['alternativeMarkupIdentifier'] = NULL;
$arguments196['identifier'] = 'actions-view-paging-previous';

$output182 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output182 .= '
                        </a>
                    </li>
                ';
return $output182;
};
$arguments180['__elseClosures'][] = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['identifier'] = NULL;
$arguments199['size'] = 'small';
$arguments199['overlay'] = NULL;
$arguments199['state'] = 'default';
$arguments199['alternativeMarkupIdentifier'] = NULL;
$arguments199['identifier'] = 'actions-view-paging-first';

$output198 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
                        </span>
                    </li>
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['identifier'] = NULL;
$arguments201['size'] = 'small';
$arguments201['overlay'] = NULL;
$arguments201['state'] = 'default';
$arguments201['alternativeMarkupIdentifier'] = NULL;
$arguments201['identifier'] = 'actions-view-paging-previous';

$output198 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output198 .= '
                        </span>
                    </li>
                ';
return $output198;
};

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
            <li>
                <span>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
                            ';
$array246 = array (
);
$output245 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recordsLabel', $array246)]);

$output245 .= '
                        ';
return $output245;
};
$arguments243 = array();

$output242 .= '';

$output242 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['key'] = NULL;
$arguments250['id'] = NULL;
$arguments250['default'] = NULL;
$arguments250['arguments'] = NULL;
$arguments250['extensionName'] = NULL;
$arguments250['languageKey'] = NULL;
$arguments250['alternativeLanguageKeys'] = NULL;
$arguments250['key'] = 'widget.pagination.records';

$output249 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output249 .= '
                        ';
return $output249;
};
$arguments247 = array();
$arguments247['if'] = NULL;

$output242 .= '';

$output242 .= '
                    ';
return $output242;
};
$arguments232 = array();
$arguments232['then'] = NULL;
$arguments232['else'] = NULL;
$arguments232['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array239 = array();
$array240 = array (
);$array239['0'] = $renderingContext->getVariableProvider()->getByPath('recordsLabel', $array240);

$expression241 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments232['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression241(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array239)
					),
					$renderingContext
				);
$arguments232['__thenClosure'] = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
                            ';
$array235 = array (
);
$output234 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recordsLabel', $array235)]);

$output234 .= '
                        ';
return $output234;
};
$arguments232['__elseClosures'][] = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['languageKey'] = NULL;
$arguments237['alternativeLanguageKeys'] = NULL;
$arguments237['key'] = 'widget.pagination.records';

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output236 .= '
                        ';
return $output236;
};

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output179 .= '
                    ';
$array252 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.startRecord', $array252)]);

$output179 .= ' - ';
$array253 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.endRecord', $array253)]);

$output179 .= '
                </span>
            </li>
            <li>
                <span>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['key'] = NULL;
$arguments254['id'] = NULL;
$arguments254['default'] = NULL;
$arguments254['arguments'] = NULL;
$arguments254['extensionName'] = NULL;
$arguments254['languageKey'] = NULL;
$arguments254['alternativeLanguageKeys'] = NULL;
$arguments254['key'] = 'widget.pagination.page';

$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext)]);

$output179 .= '

                    <form style="display:inline;"
                        data-global-event="submit"
                        data-action-navigate="$form=~s/$value/"
                        data-navigate-value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['useCacheHash'] = NULL;
$arguments256['addQueryStringMethod'] = NULL;
$arguments256['action'] = NULL;
$arguments256['arguments'] = array (
);
$arguments256['section'] = '';
$arguments256['format'] = '';
$arguments256['ajax'] = false;
// Rendering Array
$array258 = array();
$array258['currentPage'] = '$[value]';
$arguments256['arguments'] = $array258;

$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext)]);

$output179 .= '"
                        data-value-selector="input[name=\'paginator-target-page\']">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['additionalAttributes'] = NULL;
$arguments259['data'] = NULL;
$arguments259['aria'] = NULL;
$arguments259['name'] = NULL;
$arguments259['value'] = NULL;
$arguments259['property'] = NULL;
$arguments259['autofocus'] = NULL;
$arguments259['disabled'] = NULL;
$arguments259['maxlength'] = NULL;
$arguments259['readonly'] = NULL;
$arguments259['size'] = NULL;
$arguments259['placeholder'] = NULL;
$arguments259['pattern'] = NULL;
$arguments259['errorClass'] = 'f3-form-error';
$arguments259['class'] = NULL;
$arguments259['dir'] = NULL;
$arguments259['id'] = NULL;
$arguments259['lang'] = NULL;
$arguments259['style'] = NULL;
$arguments259['title'] = NULL;
$arguments259['accesskey'] = NULL;
$arguments259['tabindex'] = NULL;
$arguments259['onclick'] = NULL;
$arguments259['required'] = false;
$arguments259['type'] = 'text';
// Rendering Array
$array261 = array();
$array261['min'] = 1;
$array262 = array (
);$array261['data-number-of-pages'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array262);
$arguments259['additionalAttributes'] = $array261;
$arguments259['name'] = 'paginator-target-page';
$arguments259['class'] = 'form-control input-sm paginator-input';
$arguments259['size'] = 5;
$array263 = array (
);$arguments259['value'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array263);
$arguments259['type'] = 'number';

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output179 .= '
                    </form>

                    / ';
$array264 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array264)]);

$output179 .= '
                </span>
            </li>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['useCacheHash'] = NULL;
$arguments296['addQueryStringMethod'] = NULL;
$arguments296['action'] = NULL;
$arguments296['arguments'] = array (
);
$arguments296['section'] = '';
$arguments296['format'] = '';
$arguments296['ajax'] = false;
// Rendering Array
$array298 = array();
$array299 = array (
);$array298['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array299);
$arguments296['arguments'] = $array298;

$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext)]);

$output295 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['key'] = NULL;
$arguments300['id'] = NULL;
$arguments300['default'] = NULL;
$arguments300['arguments'] = NULL;
$arguments300['extensionName'] = NULL;
$arguments300['languageKey'] = NULL;
$arguments300['alternativeLanguageKeys'] = NULL;
$arguments300['key'] = 'widget.pagination.next';

$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext)]);

$output295 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['identifier'] = NULL;
$arguments302['size'] = 'small';
$arguments302['overlay'] = NULL;
$arguments302['state'] = 'default';
$arguments302['alternativeMarkupIdentifier'] = NULL;
$arguments302['identifier'] = 'actions-view-paging-next';

$output295 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output295 .= '
                        </a>
                    </li>
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['useCacheHash'] = NULL;
$arguments304['addQueryStringMethod'] = NULL;
$arguments304['action'] = NULL;
$arguments304['arguments'] = array (
);
$arguments304['section'] = '';
$arguments304['format'] = '';
$arguments304['ajax'] = false;
// Rendering Array
$array306 = array();
$array307 = array (
);$array306['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array307);
$arguments304['arguments'] = $array306;

$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output295 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['key'] = NULL;
$arguments308['id'] = NULL;
$arguments308['default'] = NULL;
$arguments308['arguments'] = NULL;
$arguments308['extensionName'] = NULL;
$arguments308['languageKey'] = NULL;
$arguments308['alternativeLanguageKeys'] = NULL;
$arguments308['key'] = 'widget.pagination.last';

$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext)]);

$output295 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['identifier'] = NULL;
$arguments310['size'] = 'small';
$arguments310['overlay'] = NULL;
$arguments310['state'] = 'default';
$arguments310['alternativeMarkupIdentifier'] = NULL;
$arguments310['identifier'] = 'actions-view-paging-last';

$output295 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output295 .= '
                        </a>
                    </li>
                ';
return $output295;
};
$arguments293 = array();

$output292 .= '';

$output292 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['identifier'] = NULL;
$arguments315['size'] = 'small';
$arguments315['overlay'] = NULL;
$arguments315['state'] = 'default';
$arguments315['alternativeMarkupIdentifier'] = NULL;
$arguments315['identifier'] = 'actions-view-paging-next';

$output314 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= '
                        </span>
                    </li>
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['identifier'] = NULL;
$arguments317['size'] = 'small';
$arguments317['overlay'] = NULL;
$arguments317['state'] = 'default';
$arguments317['alternativeMarkupIdentifier'] = NULL;
$arguments317['identifier'] = 'actions-view-paging-last';

$output314 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output314 .= '
                        </span>
                    </li>
                ';
return $output314;
};
$arguments312 = array();
$arguments312['if'] = NULL;

$output292 .= '';

$output292 .= '
            ';
return $output292;
};
$arguments265 = array();
$arguments265['then'] = NULL;
$arguments265['else'] = NULL;
$arguments265['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages', $array290);

$expression291 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments265['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression291(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments265['__thenClosure'] = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['useCacheHash'] = NULL;
$arguments268['addQueryStringMethod'] = NULL;
$arguments268['action'] = NULL;
$arguments268['arguments'] = array (
);
$arguments268['section'] = '';
$arguments268['format'] = '';
$arguments268['ajax'] = false;
// Rendering Array
$array270 = array();
$array271 = array (
);$array270['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array271);
$arguments268['arguments'] = $array270;

$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext)]);

$output267 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['key'] = NULL;
$arguments272['id'] = NULL;
$arguments272['default'] = NULL;
$arguments272['arguments'] = NULL;
$arguments272['extensionName'] = NULL;
$arguments272['languageKey'] = NULL;
$arguments272['alternativeLanguageKeys'] = NULL;
$arguments272['key'] = 'widget.pagination.next';

$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext)]);

$output267 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['identifier'] = NULL;
$arguments274['size'] = 'small';
$arguments274['overlay'] = NULL;
$arguments274['state'] = 'default';
$arguments274['alternativeMarkupIdentifier'] = NULL;
$arguments274['identifier'] = 'actions-view-paging-next';

$output267 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output267 .= '
                        </a>
                    </li>
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['useCacheHash'] = NULL;
$arguments276['addQueryStringMethod'] = NULL;
$arguments276['action'] = NULL;
$arguments276['arguments'] = array (
);
$arguments276['section'] = '';
$arguments276['format'] = '';
$arguments276['ajax'] = false;
// Rendering Array
$array278 = array();
$array279 = array (
);$array278['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array279);
$arguments276['arguments'] = $array278;

$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext)]);

$output267 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['key'] = NULL;
$arguments280['id'] = NULL;
$arguments280['default'] = NULL;
$arguments280['arguments'] = NULL;
$arguments280['extensionName'] = NULL;
$arguments280['languageKey'] = NULL;
$arguments280['alternativeLanguageKeys'] = NULL;
$arguments280['key'] = 'widget.pagination.last';

$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext)]);

$output267 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['identifier'] = NULL;
$arguments282['size'] = 'small';
$arguments282['overlay'] = NULL;
$arguments282['state'] = 'default';
$arguments282['alternativeMarkupIdentifier'] = NULL;
$arguments282['identifier'] = 'actions-view-paging-last';

$output267 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output267 .= '
                        </a>
                    </li>
                ';
return $output267;
};
$arguments265['__elseClosures'][] = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['identifier'] = NULL;
$arguments285['size'] = 'small';
$arguments285['overlay'] = NULL;
$arguments285['state'] = 'default';
$arguments285['alternativeMarkupIdentifier'] = NULL;
$arguments285['identifier'] = 'actions-view-paging-next';

$output284 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output284 .= '
                        </span>
                    </li>
                    <li class="disabled">
                        <span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['identifier'] = NULL;
$arguments287['size'] = 'small';
$arguments287['overlay'] = NULL;
$arguments287['state'] = 'default';
$arguments287['alternativeMarkupIdentifier'] = NULL;
$arguments287['identifier'] = 'actions-view-paging-last';

$output284 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output284 .= '
                        </span>
                    </li>
                ';
return $output284;
};

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output179 .= '
            <li>
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['useCacheHash'] = NULL;
$arguments319['addQueryStringMethod'] = NULL;
$arguments319['action'] = NULL;
$arguments319['arguments'] = array (
);
$arguments319['section'] = '';
$arguments319['format'] = '';
$arguments319['ajax'] = false;
// Rendering Array
$array321 = array();
$array322 = array (
);$array321['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array322);
$arguments319['arguments'] = $array321;

$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext)]);

$output179 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['key'] = NULL;
$arguments323['id'] = NULL;
$arguments323['default'] = NULL;
$arguments323['arguments'] = NULL;
$arguments323['extensionName'] = NULL;
$arguments323['languageKey'] = NULL;
$arguments323['alternativeLanguageKeys'] = NULL;
$arguments323['key'] = 'widget.pagination.refresh';

$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext)]);

$output179 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['identifier'] = NULL;
$arguments325['size'] = 'small';
$arguments325['overlay'] = NULL;
$arguments325['state'] = 'default';
$arguments325['alternativeMarkupIdentifier'] = NULL;
$arguments325['identifier'] = 'actions-refresh';

$output179 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output179 .= '
                </a>
            </li>
        </ul>
    </nav>
';
return $output179;
};
$arguments177 = array();
$arguments177['name'] = NULL;
$arguments177['name'] = 'paginator';

$output148 .= NULL;

$output148 .= '
';

return $output148;
}


}
#