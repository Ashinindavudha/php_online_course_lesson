<!DOCTYPE html>
<html>
<head>
	<title>Array Data Type</title>
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
<h1>PHP Array</h1><hr>
<p>An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:</p>

<hr>

<?php
$cars = array("Ashin Indavudha", "Ma Pannyanandi", "Ma Nyanavati");
var_dump($cars);
?>
</body>
</html>