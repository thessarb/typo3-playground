<?php

class partial_Footer_Footer_html_e5a47746fe085bbf67a6b584a686cc952ae7fb4b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '<footer>
       <div class="footerlol">
        <div class="footerinside">
            <div class="footerinside2">
                <a href="#">Inglish</a><p>&nbsp</p><a href="#">Danski</a><p>&nbsp</p><a href="#">Dojç</a><p>&nbsp</p>
            </div>
            <div class="row2">
                <p>Running with&nbsp</p><a href="#" >TYPO3</a><p>&nbspand&nbsp</p><a href="#">Bootstrap Package</a><p>.</p>
            </div>
        </div>    
    </div>
</footer>
 
';
}


}
#