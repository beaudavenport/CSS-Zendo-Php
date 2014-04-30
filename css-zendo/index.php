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
		<div id="contentWrapper">
			<div id="bigTitle">
				<h1>CSS ZENDO</h1>	
			</div>
			
			<div id="navBar">
				<h3>Welcome</h3>
				<p><em>CSS Zendo</em> is a training ground for learning basic CSS commands.
					Below you'll find a game board with "pieces." By clicking on an element
					and entering commands in the terminal, you'll be able to manipulate the 
					CSS styling of the element in real time.  Each level has a simple goal
					which can only be accomplished by manipulating the style properties of
					the element.</p>
			</div>	
			
			<!-- Game area with dynamic elements -->
			<?php include 'gameBoard.php' ?>
			
			<div id="inputBox">			
	    		<p id="elementID">#[Click an Element] {</p>
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
