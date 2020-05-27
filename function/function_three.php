<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<head>
	<title>Declare Strict Types</title>
</head>
<body>
	<h1 style="color: red;">PHP Functions - Returning values</h1>
	<p style="color: blue;font-size: 20px;">
To let a function return a value, use the return statement:</p>
<?php 
function sum(int $x, int $y) {
	$z = $x + $y;
	return $z;
}
echo "5 + 10 =" . sum(5,10). "<br><hr>";
echo "7 + 13 =" . sum(7,13). "<br><hr>";
echo "2 + 4 =" . sum(2,4) . "<br><hr>";
echo "Hello world";
?>

</body>
</html>