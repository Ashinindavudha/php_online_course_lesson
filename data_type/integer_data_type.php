<!DOCTYPE html>
<html>
<head>
	<title>Integer Data Type</title>
	<style>
		h1 {
			text-align: center;
			color: red;
		}
		p {
			color: blue;
			font-size: 30px;
		}
		ul li {
			color: #3f5408;
			font-size: 20px;
		}

	</style>
</head>
<body>
<h1>PHP Integer</h1><hr>
<p>An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.</p><hr>

<h1>Rules for integers:<h1><hr>
<ul>
<li>An integer must have at least one digit</li>
<li>An integer must not have a decimal point</li>
<li>An integer can be either positive or negative</li>
<li>Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation</li>
<li>In the following example $x is an integer. The PHP var_dump() function returns the data type and value:</li>
</ul>

<?php 
$x = 5985;
var_dump($x);
?>
</body>
</html>