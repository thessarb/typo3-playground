<?php

class Standard_action_teaser_7942e62a2a39f3566dc46b24478d86feb6cc7a3a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['value'] = NULL;
$arguments1['name'] = NULL;
$arguments1['name'] = 'backgroundOptions';
$array3 = array (
);$arguments1['value'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_teaser_bg', $array3);
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['value'] = NULL;
$arguments51['name'] = NULL;
$arguments51['name'] = 'backgroundColor';
$array53 = array (
);$arguments51['value'] = $renderingContext->getVariableProvider()->getByPath('backgroundOptions', $array53);
$renderChildrenClosure52 = ($arguments51['value'] !== null) ? function() use ($arguments51) { return $arguments51['value']; } : $renderChildrenClosure52;
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '
    ';
return $output50;
};
$arguments48 = array();
$arguments48['value'] = NULL;
$arguments48['value'] = '';

$output47 .= '';

$output47 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['value'] = NULL;
$arguments57['name'] = NULL;
$arguments57['name'] = 'backgroundColor';
$array59 = array (
);$arguments57['value'] = $renderingContext->getVariableProvider()->getByPath('backgroundOptions', $array59);
$renderChildrenClosure58 = ($arguments57['value'] !== null) ? function() use ($arguments57) { return $arguments57['value']; } : $renderChildrenClosure58;
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '
    ';
return $output56;
};
$arguments54 = array();
$arguments54['value'] = NULL;
$arguments54['value'] = '#FFFF00';

$output47 .= '';

$output47 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['value'] = NULL;
$arguments63['name'] = NULL;
$arguments63['name'] = 'backgroundColor';
$array65 = array (
);$arguments63['value'] = $renderingContext->getVariableProvider()->getByPath('backgroundOptions', $array65);
$renderChildrenClosure64 = ($arguments63['value'] !== null) ? function() use ($arguments63) { return $arguments63['value']; } : $renderChildrenClosure64;
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output62 .= '
    ';
return $output62;
};
$arguments60 = array();
$arguments60['value'] = NULL;
$arguments60['value'] = '#0000ff';

$output47 .= '';

$output47 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['value'] = NULL;
$arguments69['name'] = NULL;
$arguments69['name'] = 'backgroundColor';
$array71 = array (
);$arguments69['value'] = $renderingContext->getVariableProvider()->getByPath('backgroundOptions', $array71);
$renderChildrenClosure70 = ($arguments69['value'] !== null) ? function() use ($arguments69) { return $arguments69['value']; } : $renderChildrenClosure70;
$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output68 .= '
    ';
return $output68;
};
$arguments66 = array();
$arguments66['value'] = NULL;
$arguments66['value'] = '#808080';

$output47 .= '';

$output47 .= '
';
return $output47;
};
$arguments4 = array();
$arguments4['expression'] = NULL;
$array46 = array (
);$arguments4['expression'] = $renderingContext->getVariableProvider()->getByPath('backgroundOptions', $array46);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return '';
}): return call_user_func(function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['name'] = NULL;
$arguments7['name'] = 'backgroundColor';
$array9 = array (
);$arguments7['value'] = $renderingContext->getVariableProvider()->getByPath('backgroundOptions', $array9);
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
    ';
return $output6;
});
case call_user_func(function() use ($renderingContext, $self) {

return '#FFFF00';
}): return call_user_func(function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['value'] = NULL;
$arguments17['name'] = NULL;
$arguments17['name'] = 'backgroundColor';
$array19 = array (
);$arguments17['value'] = $renderingContext->getVariableProvider()->getByPath('backgroundOptions', $array19);
$renderChildrenClosure18 = ($arguments17['value'] !== null) ? function() use ($arguments17) { return $arguments17['value']; } : $renderChildrenClosure18;
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
    ';
return $output16;
});
case call_user_func(function() use ($renderingContext, $self) {

return '#0000ff';
}): return call_user_func(function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['value'] = NULL;
$arguments27['name'] = NULL;
$arguments27['name'] = 'backgroundColor';
$array29 = array (
);$arguments27['value'] = $renderingContext->getVariableProvider()->getByPath('backgroundOptions', $array29);
$renderChildrenClosure28 = ($arguments27['value'] !== null) ? function() use ($arguments27) { return $arguments27['value']; } : $renderChildrenClosure28;
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= '
    ';
return $output26;
});
case call_user_func(function() use ($renderingContext, $self) {

return '#808080';
}): return call_user_func(function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['value'] = NULL;
$arguments37['name'] = NULL;
$arguments37['name'] = 'backgroundColor';
$array39 = array (
);$arguments37['value'] = $renderingContext->getVariableProvider()->getByPath('backgroundOptions', $array39);
$renderChildrenClosure38 = ($arguments37['value'] !== null) ? function() use ($arguments37) { return $arguments37['value']; } : $renderChildrenClosure38;
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output36 .= '
    ';
return $output36;
});
}
}, array($arguments4));

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['value'] = NULL;
$arguments72['name'] = NULL;
$arguments72['name'] = 'switch';
$array74 = array (
);$arguments72['value'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_switch_toggle', $array74);
$renderChildrenClosure73 = ($arguments72['value'] !== null) ? function() use ($arguments72) { return $arguments72['value']; } : $renderChildrenClosure73;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['value'] = NULL;
$arguments90['name'] = NULL;
$arguments90['name'] = 'side0';
$arguments90['value'] = 'teaser-container2';
$renderChildrenClosure91 = ($arguments90['value'] !== null) ? function() use ($arguments90) { return $arguments90['value']; } : $renderChildrenClosure91;
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output89 .= '
    ';
return $output89;
};
$arguments87 = array();

$output86 .= '';

$output86 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['value'] = NULL;
$arguments95['name'] = NULL;
$arguments95['name'] = 'side0';
$arguments95['value'] = 'teaser-container';
$renderChildrenClosure96 = ($arguments95['value'] !== null) ? function() use ($arguments95) { return $arguments95['value']; } : $renderChildrenClosure96;
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output94 .= '
    ';
return $output94;
};
$arguments92 = array();
$arguments92['if'] = NULL;

$output86 .= '';

$output86 .= '
';
return $output86;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('switch', $array84);

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['value'] = NULL;
$arguments78['name'] = NULL;
$arguments78['name'] = 'side0';
$arguments78['value'] = 'teaser-container2';
$renderChildrenClosure79 = ($arguments78['value'] !== null) ? function() use ($arguments78) { return $arguments78['value']; } : $renderChildrenClosure79;
$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output77 .= '
    ';
return $output77;
};
$arguments75['__elseClosures'][] = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['value'] = NULL;
$arguments81['name'] = NULL;
$arguments81['name'] = 'side0';
$arguments81['value'] = 'teaser-container';
$renderChildrenClosure82 = ($arguments81['value'] !== null) ? function() use ($arguments81) { return $arguments81['value']; } : $renderChildrenClosure82;
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output80 .= '
    ';
return $output80;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output0 .= '

<div class="teaser1" style="background-color: ';
$array97 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundColor', $array97)]);

$output0 .= ';">
    <div class="';
$array98 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('side0', $array98)]);

$output0 .= '">
        <div class="content-body">
            <h1>';
$array99 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_headline_teaser', $array99)]);

$output0 .= '</h1>
            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array102 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_teaser_text', $array102)]);
};
$arguments100 = array();
$arguments100['value'] = NULL;
$renderChildrenClosure101 = ($arguments100['value'] !== null) ? function() use ($arguments100) { return $arguments100['value']; } : $renderChildrenClosure101;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output0 .= '</p>
            <div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$array115 = array (
);return $renderingContext->getVariableProvider()->getByPath('data_item.uid', $array115);
};
$arguments113 = array();
$arguments113['data'] = NULL;
$arguments113['typoscriptObjectPath'] = NULL;
$arguments113['currentValueKey'] = NULL;
$arguments113['table'] = '';
$arguments113['typoscriptObjectPath'] = 'lib.tx_mask.content';
$renderChildrenClosure114 = ($arguments113['data'] !== null) ? function() use ($arguments113) { return $arguments113['data']; } : $renderChildrenClosure114;
$output112 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
                    ';
return $output112;
};
$arguments109 = array();
$arguments109['each'] = NULL;
$arguments109['as'] = NULL;
$arguments109['key'] = NULL;
$arguments109['reverse'] = false;
$arguments109['iteration'] = NULL;
$array111 = array (
);$arguments109['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_button2', $array111);
$arguments109['as'] = 'data_item';

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
            </div>
            ';
return $output108;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_button2', $array106);

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = $renderChildrenClosure104;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output0 .= '
        </div>
        <div class="content-media">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['aria'] = NULL;
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['title'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['alt'] = NULL;
$arguments120['file'] = NULL;
$arguments120['additionalConfig'] = array (
);
$arguments120['width'] = NULL;
$arguments120['height'] = NULL;
$arguments120['cropVariant'] = 'default';
$arguments120['fileExtension'] = NULL;
$arguments120['loading'] = NULL;
$array122 = array (
);$arguments120['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array122);
$arguments120['width'] = '480px';
$arguments120['height'] = '280px';

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
                ';
$array123 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.description', $array123)]);

$output119 .= '
            ';
return $output119;
};
$arguments116 = array();
$arguments116['each'] = NULL;
$arguments116['as'] = NULL;
$arguments116['key'] = NULL;
$arguments116['reverse'] = false;
$arguments116['iteration'] = NULL;
$array118 = array (
);$arguments116['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_teaser_media', $array118);
$arguments116['as'] = 'file';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output0 .= '

        </div>

    </div>
</div>
';

return $output0;
}


}
#