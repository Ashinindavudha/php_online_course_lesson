<?php declare(strict_types=1); //strict requirement ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Return Type Declarations</title>
	<style>
		h1 {
			color: red;
		}
		p {
			color: blue;
			font-size: 20px;
		}
	</style>
</head>
<body>
<h1>PHP Return Type Declarations</h1>
<p>PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.</p>

<p>To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.</p>

<p>In the following example we specify the return type for the function:</p>
<?php 
function addNumbers(float $a, float $b) : float {
	return $a + $b;
}
echo "Answer: a + b = " . addNumbers(1.2, 5.2);
?>
</body>
</html>
