<?php

class Standard_action_default_acdbc650876af8e3f80dc9bbdcf8e21be1689e2a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= ' 
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
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
$arguments18['partial'] = 'Header/headerdark.html';
$arguments18['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
        ';
return $output17;
};
$arguments15 = array();

$output14 .= '';

$output14 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['section'] = NULL;
$arguments24['partial'] = NULL;
$arguments24['delegate'] = NULL;
$arguments24['renderable'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['optional'] = false;
$arguments24['default'] = NULL;
$arguments24['contentAs'] = NULL;
$arguments24['debug'] = true;
$arguments24['partial'] = 'Header/headerlight.html';
$arguments24['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
        ';
return $output23;
};
$arguments21 = array();
$arguments21['if'] = NULL;

$output14 .= '';

$output14 .= '
    ';
return $output14;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('data.pid', $array12);
$array11['1'] = ' == 0';

$expression13 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'Header/headerdark.html';
$arguments4['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['section'] = NULL;
$arguments8['partial'] = NULL;
$arguments8['delegate'] = NULL;
$arguments8['renderable'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$arguments8['default'] = NULL;
$arguments8['contentAs'] = NULL;
$arguments8['debug'] = true;
$arguments8['partial'] = 'Header/headerlight.html';
$arguments8['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
        ';
return $output7;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['data'] = NULL;
$arguments27['typoscriptObjectPath'] = NULL;
$arguments27['currentValueKey'] = NULL;
$arguments27['table'] = '';
$arguments27['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array29 = array();
$array29['colPos'] = 0;
$arguments27['data'] = $array29;
$renderChildrenClosure28 = ($arguments27['data'] !== null) ? function() use ($arguments27) { return $arguments27['data']; } : $renderChildrenClosure28;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '  
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['section'] = NULL;
$arguments30['partial'] = NULL;
$arguments30['delegate'] = NULL;
$arguments30['renderable'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['optional'] = false;
$arguments30['default'] = NULL;
$arguments30['contentAs'] = NULL;
$arguments30['debug'] = true;
$arguments30['partial'] = 'Footer/Footer.html';
$arguments30['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments33 = array();
$arguments33['title'] = NULL;
$arguments33['maxDepth'] = 8;
$arguments33['plainText'] = false;
$arguments33['ansiColors'] = false;
$arguments33['inline'] = false;
$arguments33['blacklistedClassNames'] = NULL;
$arguments33['blacklistedPropertyNames'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output36 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['name'] = NULL;
$arguments37['name'] = 'Default';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output36 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= ' 
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['section'] = NULL;
$arguments59['partial'] = NULL;
$arguments59['delegate'] = NULL;
$arguments59['renderable'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['optional'] = false;
$arguments59['default'] = NULL;
$arguments59['contentAs'] = NULL;
$arguments59['debug'] = true;
$arguments59['partial'] = 'Header/headerdark.html';
$arguments59['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
        ';
return $output58;
};
$arguments56 = array();

$output55 .= '';

$output55 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['section'] = NULL;
$arguments65['partial'] = NULL;
$arguments65['delegate'] = NULL;
$arguments65['renderable'] = NULL;
$arguments65['arguments'] = array (
);
$arguments65['optional'] = false;
$arguments65['default'] = NULL;
$arguments65['contentAs'] = NULL;
$arguments65['debug'] = true;
$arguments65['partial'] = 'Header/headerlight.html';
$arguments65['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
        ';
return $output64;
};
$arguments62 = array();
$arguments62['if'] = NULL;

$output55 .= '';

$output55 .= '
    ';
return $output55;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('data.pid', $array53);
$array52['1'] = ' == 0';

$expression54 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments42['__thenClosure'] = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['section'] = NULL;
$arguments45['partial'] = NULL;
$arguments45['delegate'] = NULL;
$arguments45['renderable'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['optional'] = false;
$arguments45['default'] = NULL;
$arguments45['contentAs'] = NULL;
$arguments45['debug'] = true;
$arguments45['partial'] = 'Header/headerdark.html';
$arguments45['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
        ';
return $output44;
};
$arguments42['__elseClosures'][] = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['section'] = NULL;
$arguments49['partial'] = NULL;
$arguments49['delegate'] = NULL;
$arguments49['renderable'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['optional'] = false;
$arguments49['default'] = NULL;
$arguments49['contentAs'] = NULL;
$arguments49['debug'] = true;
$arguments49['partial'] = 'Header/headerlight.html';
$arguments49['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
        ';
return $output48;
};

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['data'] = NULL;
$arguments68['typoscriptObjectPath'] = NULL;
$arguments68['currentValueKey'] = NULL;
$arguments68['table'] = '';
$arguments68['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array70 = array();
$array70['colPos'] = 0;
$arguments68['data'] = $array70;
$renderChildrenClosure69 = ($arguments68['data'] !== null) ? function() use ($arguments68) { return $arguments68['data']; } : $renderChildrenClosure69;
$output41 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output41 .= '  
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['section'] = NULL;
$arguments71['partial'] = NULL;
$arguments71['delegate'] = NULL;
$arguments71['renderable'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['optional'] = false;
$arguments71['default'] = NULL;
$arguments71['contentAs'] = NULL;
$arguments71['debug'] = true;
$arguments71['partial'] = 'Footer/Footer.html';
$arguments71['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output41 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments74 = array();
$arguments74['title'] = NULL;
$arguments74['maxDepth'] = 8;
$arguments74['plainText'] = false;
$arguments74['ansiColors'] = false;
$arguments74['inline'] = false;
$arguments74['blacklistedClassNames'] = NULL;
$arguments74['blacklistedPropertyNames'] = NULL;

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output41 .= '
';
return $output41;
};
$arguments39 = array();
$arguments39['name'] = NULL;
$arguments39['name'] = 'Main';

$output36 .= NULL;

return $output36;
}


}
#