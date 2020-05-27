<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unserialize_Function</title>
</head>
<body>
	<h1 style="color: red;">Convert serialized data back into actual data:</h1><br><hr>
	<p><strong style="color: blue;">Return Type:	</strong>Boolean, integer, float, string, array or object</p><br><hr>
	<?php 
$data = serialize(array("Red", "Green", "Blue"));
echo $data . "<br>";

$test = unserialize($data);
var_dump($test);
	 ?>
</body>
</html>