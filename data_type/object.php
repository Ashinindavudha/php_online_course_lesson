<!DOCTYPE html>
<html>
<head>
	<title>PHP Object</title>
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
<h1>PHP Object</h1><hr>
<p>An object is a data type which stores data and information on how to process that data.

In PHP, an object must be explicitly declared.

First we must declare a class of object. For this, we use the class keyword. A class is a structure that can contain properties and methods:</p><hr>

<?php 
class Car {
	function Car() {
		$this->model = "BMW";
	}
}
//create an object
$herbie = new Car();
// show object properties
echo $herbie->model;
?>
</body>
</html>