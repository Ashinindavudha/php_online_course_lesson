<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>if condition</p>
	<?php
	$age = 18; 
if ($age < 20) {
	echo ('you cannot be a monk.');
}
	 ?>
	 <br>
	 <hr>
	 <form action="">
	 	<input type="text" name="age">
	 	<input type="submit" value="Submit" name="check">
	 </form>
	 <?php 
if (isset($_GET['check'])) {
	if ($_GET['age'] > 20) {
		echo ('you can ba a monk');
	}
}
	  ?>

	  <hr>
	  <?php 

	  $age = 18;
	  if ($age > 20) { // အခြေအနေသည် true or false
	  	// တစ်နည်းအားဖြင့် boolean တန်းဖိုးဖြစ်သည်
	  echo ('you can be a monk');
	  	
	  }
	   ?>
</body>
</html>