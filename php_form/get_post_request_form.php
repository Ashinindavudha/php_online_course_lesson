<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get Form</title>
	<style>
		
		ul li {
			display: inline-block;
		}
		ul li a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<?php require_once 'get_post_request_process.php' ?>
	<form action="" method="POST">
		<p>First Name: <input type="text" name="name" value=""></p>
		<p>Last Name: <input type="text" name="lastname" value=""></p>
		<p>Email: <input type="email" name="email" value=""></p>
		<input type="submit" name="submit" value="Submit">
	</form>
	<br><hr>
	<div>
		<ul>
			<li><a href="https://github.com/Ashinindavudha/php_form_handeling" target="_blank">Click Here To Download</a><span> Facebook </span></li>
			<li><a href="https://www.facebook.com/rose.tr.75" target="_blank">Created By Ashin Indavudha</a></li>
		</ul>
		
	</div>
</body>
</html>