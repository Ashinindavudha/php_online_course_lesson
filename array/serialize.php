<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Serialize Function</title>
	<style>
		h1 {color: red;}
		p {color: blue; font-size: 20px;}
		pre {color: red;}
	</style>
</head>
<body>
	<h1>PHP Serialize Function</h1><br><hr>
	<p>The serialize() function converts a storable representation of a value.

To serialize data means to convert a value to a sequence of bits, so that it can be stored in a file, a memory buffer, or transmitted across a network.</p><br><hr>
<pre><span>Syntax:</span> serialize(value)-></pre><span>Value means "Required. Specifies the value to be serialized".</span><hr>
	<?php 
	$data = serialize(array("Red", "Green", "Blue"));
	echo $data;
	 ?>
</body>
</html>