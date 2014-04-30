<?php
include 'classes/css_element.php';
function addElement($css_element) {
	return "<style>#" . $css_element->getIdentifier() . "{"
	. "height: " . $css_element->getHeight() . "px; "
	. "width: " . $css_element->getWidth() . "px; "
	. "float: " . $css_element->getFloat() . "; "
	. "display: " . $css_element->getDisplay() . "; "
	. "background-color: " . $css_element->getBackground_color() . "}"
	. "</style><div class=\"gameDiv\" id=\"" . $css_element->getIdentifier() . "\"></div>";	
}
$leftSquare = new Css_element("left", 100, 20, "red");
$leftSquare->setFloat("left");
$rightSquare = new Css_element("right", 100, 20, "green");
$rightSquare->setFloat("right");

?>
<div id="viewWindow">
	<div id="spacer">					
	</div>
	<div class="gameDiv" id="element">					
	</div>
	<div id="bottomSpacer">
		<?php echo addElement($leftSquare); ?>
		<?php echo addElement($rightSquare); ?>
	</div>
</div>