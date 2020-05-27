<!DOCTYPE html>
<html>
<head><title>PHP Variables</title>
	<style>
		h1 {color: red;text-align: center;}
		h4 {text-align: center;color: #094779;}
		h3 {
			text-align: center;color: #a4740b;}
		ul li {color: #0ba455;font-size: 20px;}
	</style>
</head>
<body>
	<h1>PHP Variables</h1>
	<h3>Variables are "containers" for storing information.</h3><hr>

	<h1>Creating (Declaring) PHP Variables</h1>
<h4>In PHP, a variable starts with the $ sign, followed by the name of the variable:</h4><hr>
<h1>Rule For PHP Variable</h1>
<ul>
	<li>A variable starts with the $ sign, followed by the name of the variable</li>
	<li>A variable name must start with a letter or the underscore character</li>
	<li>A variable name cannot start with a number</li>
	<li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
	<li>Variable names are case-sensitive ($age and $AGE are two different variables)</li>
</ul><hr>

<?php 
$txt = "hello world";
$x = 5;
$y = 10.2;
$z = $x + $y;
echo $txt . "<br> <hr>" . $z;
?>
</body>
</html>