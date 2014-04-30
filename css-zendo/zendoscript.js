$(document).ready(function() {
	//welcome message
	
	//get user clicked name
	$('.gameDiv').click(function() {
		var divName = "#" + $(this).attr('id') + " {";
		$("#elementID").text(divName);	
	});
	
	//apply user input
	$("#enter").click(function() {
		var input = $("#command").val();
		var selectors = input.split(":"); 
		alert(selectors[0]);
		alert(selectors[1]);
		var elementOne = selectors[0].trim();
		var elementTwo = selectors[1].trim();
		$("#element").css(elementOne, elementTwo);
		
		//listen for objective completion
		var elementCOOR = $("#element").position();
		var rightEdge = elementCOOR.left + $("#element").width();
		alert(rightEdge);
		if (rightEdge > 290 && rightEdge < 300)
		{
			alert("You won!");
		}
	});
	
	//check input for proper syntax
	$("#command").keyup(function(event) {
		alert(event.keyCode);
	});
});

