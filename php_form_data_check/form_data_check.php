<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Data Check</title>
</head>
<body>
	<?php 

if (isset($_REQUEST['check'])) {
	echo $_POST['name'];
}
	 ?>
	 <form action="form_data_check.php?check" method="post">
	 	Name: <input type="text" name="name" /> <br>
	 	<input type="submit" value="Print Name">
	 </form>
</body>
</html>