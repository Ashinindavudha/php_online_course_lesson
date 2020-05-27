<?php 

if (isset($_POST['check'])) { //the POST FORM HAS BEEN SUBMITTED
	echo "User Name:". $_POST['name'].'<br>';
}

function pre_r($array) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';
 }

 ?>
