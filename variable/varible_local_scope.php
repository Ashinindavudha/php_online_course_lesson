<!DOCTYPE html>
<html>
<head>
	<title>Local Varible Scope</title>
	<style>
		h1 {
			text-align: center;
			color: #08542d;
		}
		h4 {
			text-align: center;
			color: red;
		}
	</style>
</head>
<body>
<h4>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</h4>
<h1>Variable with local scope:</h1><hr>

<?php 
function myTest() {
	$x = 5; //local scope
	echo "variable x inside function is: $x";
}

myTest();
//using x outside the function will generate an error
echo "variable x outside function is: $x";
?>
</body>
</html>