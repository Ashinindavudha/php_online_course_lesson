<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Var_dump Function</title>
</head>
<body>
	<h1 style="color: red;">Var_Dump_Function</h1><hr>
	<p style="color: blue; font-size: 20px;">The var_dump() function dumps information about one or more variables. The information holds type and value of the variable(s).</p><hr>
<?php 
$a = 32;
echo var_dump($a) . "<br>";

$b = "hello world";
echo var_dump($b). "<br>";
$c = 32.5;
echo var_dump($c) . "<br>";
$d = array("red", "green", "blue");
echo var_dump($d) . "<br>";

$e = array(32, "Hello World", 32.5, array("red", "green", "blue"));
echo var_dump($e). "<br>";

// Dump two varibles

echo var_dump($a, $b) . "<br>";
 ?>	
</body>
</html>