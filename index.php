<!DOCTYPE html >
<html> 
	<head>
		<title>CSS Zendo</title>
		<link href='http://fonts.googleapis.com/css?family=Carter+One' rel='stylesheet' type='text/css'>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="zendoscript.js"></script>
		<link rel="stylesheet" type="text/css"  href="stylesheet1.css" />
	</head>
	<body>
		<div id="bigTitle">
			<h1>CSS ZENDO</h1>	
		</div>
		<div id="contentWrapper">
						
			<!-- Game area with dynamic elements -->
			<div id="viewWindow">
				<div id="spacer">					
				</div>
				<div id="element">					
				</div>
				<div id="bottomSpacer">
					<div id="left">
					</div>
					<div id="right">
					</div>
				</div>
			</div>	
			<div id="inputBox">			
	    		<p>#element {</p>
	    		<input type="text" id="command" placeholder="Enter a css command" />
	    		<button id="enter">Enter</button>
	    		<p>}</p>
			</div>
			<div id="messageBox">
				<p id="message">Make a bridge from A to B, using the <code>width</code> property,
					without touching the side of the window...</p>
			</div>
		</div>
	</body>
</html>
