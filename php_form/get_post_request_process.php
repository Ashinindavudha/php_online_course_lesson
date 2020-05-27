<?php
	pre_r($_POST);
	pre_r($_GET); 
	pre_r($_REQUEST);
	if (isset($_POST['submit'])) {
		echo "The Form is Using POST Method <br>";
		echo "First Name:" . $_POST['name'] . "<br>";
		echo "Last Name:" . $_POST['lastname'] . "<br>";
		echo "email:" . $_POST['email'] . "<br>";
	}

	elseif (isset($_GET['submit'])) {
		echo "The Form is Using GET Method <br>";
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