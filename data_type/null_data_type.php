<!DOCTYPE html>
<html>
<head>
	<title>PHP NULL VALUE</title>
	<style>
		h1 {
			color: red;
			text-align: center;
		}
		p {
			color: blue;
			font-size: 20px;
		}
		span {
			color: red;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1>PHP NULL Value</h1><hr>
<p>Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.</p>

<strong>Tip:</strong> <span> If a variable is created without a value, it is automatically assigned a value of NULL.</span>

<p>Variables can also be emptied by setting the value to NULL:</p><hr>
<?php
$x = "Hello World";
$x = null;
var_dump($x);
?>
</body>
</html>