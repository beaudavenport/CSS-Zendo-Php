<?php

include 'classes/css_element.php';

echo "an example of the css_element class in action.";
$newElement = new Css_element("Hello", 50, 50);

function addElement($css_element) {
	return "<style>#" . $css_element->getIdentifier() . "{"
	. "height: " . $css_element->getHeight() . "; "
	. "width: " . $css_element->getWidth() . "; "
	. "background-color: " . $css_element->getBackground_color() . "}"
	. "</style><div id=\"" . $css_element->getIdentifier() . "\"></div>";	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Practice with classes</title>
</head>
<body>	
	<?php echo (addElement($newElement)); ?>
</body>
</html>