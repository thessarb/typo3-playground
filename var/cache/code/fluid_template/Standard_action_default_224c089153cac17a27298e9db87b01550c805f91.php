<?php

class Standard_action_default_224c089153cac17a27298e9db87b01550c805f91 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments18['partial'] = 'Header/headerlight.html';
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
$arguments24['partial'] = 'Header/headerdark.html';
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
$array11['1'] = ' == 1';

$expression13 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
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
$arguments4['partial'] = 'Header/headerlight.html';
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
$arguments8['partial'] = 'Header/headerdark.html';
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

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output33 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['name'] = NULL;
$arguments34['name'] = 'Default';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output33 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= ' 
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['section'] = NULL;
$arguments56['partial'] = NULL;
$arguments56['delegate'] = NULL;
$arguments56['renderable'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['optional'] = false;
$arguments56['default'] = NULL;
$arguments56['contentAs'] = NULL;
$arguments56['debug'] = true;
$arguments56['partial'] = 'Header/headerlight.html';
$arguments56['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
        ';
return $output55;
};
$arguments53 = array();

$output52 .= '';

$output52 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['section'] = NULL;
$arguments62['partial'] = NULL;
$arguments62['delegate'] = NULL;
$arguments62['renderable'] = NULL;
$arguments62['arguments'] = array (
);
$arguments62['optional'] = false;
$arguments62['default'] = NULL;
$arguments62['contentAs'] = NULL;
$arguments62['debug'] = true;
$arguments62['partial'] = 'Header/headerdark.html';
$arguments62['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
        ';
return $output61;
};
$arguments59 = array();
$arguments59['if'] = NULL;

$output52 .= '';

$output52 .= '
    ';
return $output52;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('data.pid', $array50);
$array49['1'] = ' == 1';

$expression51 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments39['__thenClosure'] = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['debug'] = true;
$arguments42['partial'] = 'Header/headerlight.html';
$arguments42['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
        ';
return $output41;
};
$arguments39['__elseClosures'][] = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['section'] = NULL;
$arguments46['partial'] = NULL;
$arguments46['delegate'] = NULL;
$arguments46['renderable'] = NULL;
$arguments46['arguments'] = array (
);
$arguments46['optional'] = false;
$arguments46['default'] = NULL;
$arguments46['contentAs'] = NULL;
$arguments46['debug'] = true;
$arguments46['partial'] = 'Header/headerdark.html';
$arguments46['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
        ';
return $output45;
};

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['data'] = NULL;
$arguments65['typoscriptObjectPath'] = NULL;
$arguments65['currentValueKey'] = NULL;
$arguments65['table'] = '';
$arguments65['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array67 = array();
$array67['colPos'] = 0;
$arguments65['data'] = $array67;
$renderChildrenClosure66 = ($arguments65['data'] !== null) ? function() use ($arguments65) { return $arguments65['data']; } : $renderChildrenClosure66;
$output38 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output38 .= '  
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['section'] = NULL;
$arguments68['partial'] = NULL;
$arguments68['delegate'] = NULL;
$arguments68['renderable'] = NULL;
$arguments68['arguments'] = array (
);
$arguments68['optional'] = false;
$arguments68['default'] = NULL;
$arguments68['contentAs'] = NULL;
$arguments68['debug'] = true;
$arguments68['partial'] = 'Footer/Footer.html';
$arguments68['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output38 .= '
';
return $output38;
};
$arguments36 = array();
$arguments36['name'] = NULL;
$arguments36['name'] = 'Main';

$output33 .= NULL;

$output33 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments71 = array();
$arguments71['title'] = NULL;
$arguments71['maxDepth'] = 8;
$arguments71['plainText'] = false;
$arguments71['ansiColors'] = false;
$arguments71['inline'] = false;
$arguments71['blacklistedClassNames'] = NULL;
$arguments71['blacklistedPropertyNames'] = NULL;

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

return $output33;
}


}
#