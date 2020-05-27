<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get Form</title>
</head>
<body>
	<?php 
	pre_r($_POST);
	if (isset($_POST['submit'])) {
		echo "First Name:" . $_POST['name'] . "<br>";
		echo "Last Name:" . $_POST['lastname'] . "<br>";
		echo "email:" . $_POST['email'] . "<br>";
	}
function pre_r($array) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';
 }
	 ?>
	<form action="" method="POST">
		<p>First Name: <input type="text" name="name" value=""></p>
		<p>Last Name: <input type="text" name="lastname" value=""></p>
		<p>Email: <input type="email" name="email" value=""></p>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>