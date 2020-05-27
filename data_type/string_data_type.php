<!DOCTYPE html>
<html>
<head>
	<title>PHP DATA TYPE</title>
	<style>
		h1 {
			text-align: center;
			color: red;
		}
		p {
			color: blue;
			font-size: 20px;
		}
		ul li {
			color: #1e5408;
			font-size: 20px;
		}
	</style>

</head>
<body>
	<h1>PHP Data Types</h1>
	<p>Variables can store data of different types, and different data types can do different things.</p><hr>

	<h1>PHP supports the following data types:</h1>
	<hr>
	<ul>
		<li>String</li>
		<li>Integer</li>
		<li>Float</li>
		<li>Boolean</li>
		<li>Array</li>
		<li>Object</li>
		<li>Null</li>
		<li>Resource</li>
	</ul>
<hr>
<h1>PHP String</h1>
<p>A string is a sequence of characters, like "Hello world!".

A string can be any text inside quotes. You can use single or double quotes:</p><hr>

<?php
$x = "Hello World";
$y = 'hello world!';
echo $x;
echo "<br>";
echo $y;
?>
</body>
</html>