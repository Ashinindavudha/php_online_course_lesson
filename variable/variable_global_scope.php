<!DOCTYPE html>
<html>
<head>
	<title>PHP Variables Scope</title>
	<style>
		h1 {
			color: red;
			text-align: center;
		}
		p {
			color: blue;
			font-size: 20px;
		}
	</style>
</head>
<body>
<h1>PHP Variables Scope</h1>
<p>In PHP, variables can be declared anywhere in the script.</p>

<p>The scope of a variable is the part of the script where the variable can be referenced/used.</p>

<p>PHP has three different variable scopes:</p>
<hr>

<ul>
	<li>local</li>
	<li>global</li>
	<li>static</li>
</ul>
<hr>
<h1>Global and Local Scope</h1>
<p>A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:</p>

<hr>
<h1>Example</h1>
<p>Variable with global scope:</p>
<hr>


<?php
$x = 5; // Global Scope




function myTest() {
	// using inside this function will generate an error
	echo "<p>Variable x inside function is: $x</p>" ;

}


myTest();
echo "variable x outside function is $x <hr>";
?>
</body>
</html>