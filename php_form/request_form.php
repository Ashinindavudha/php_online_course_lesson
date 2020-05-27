<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get Form</title>
</head>
<body>
	<?php 
	pre_r($_REQUEST);
	if (isset($_GET['submit'])) {
		echo "First Name:" . $_GET['name'] . "<br>";
		echo "Last Name:" . $_GET['lastname'] . "<br>";
		echo "email:" . $_GET['email'] . "<br>";
	}
function pre_r($array) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';
 }
	 ?>
	<form action="" method="GET">
		<p>First Name: <input type="text" name="name" value=""></p>
		<p>Last Name: <input type="text" name="lastname" value=""></p>
		<p>Email: <input type="email" name="email" value=""></p>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>