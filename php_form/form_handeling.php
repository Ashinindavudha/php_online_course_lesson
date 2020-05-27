<?php 

if (isset($_POST['check'])) { //the POST FORM HAS BEEN SUBMITTED
	echo "User Name:". $_POST['name'].'<br>';
	echo "Email:". $_POST['email'].'<br>';
	echo "Phone:". $_POST['phone'].'<br>';
	echo "Job:". $_POST['job'].'<br>';
}

function pre_r($array) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Form Handeling</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<h1 style="text-align: center;">PHP User List</h1><hr>
	<div class="container">
		<div class="row col-lg-8 offset-4">
			

			<form action="" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="name" class="form-control" placeholder="Full name" type="text">
				</div> 

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
					</div>
					<input name="email" class="form-control" placeholder="Email address" type="email">
				</div> 
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
					</div>
					<select class="custom-select" style="max-width: 120px;">
						<option selected="">+959</option>
						<option value="1">+972</option>
						<option value="2">+198</option>
						<option value="3">+701</option>
					</select>
					<input name="phone" class="form-control" placeholder="Phone number" type="text">
				</div> <!-- form-group// -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-building"></i> </span>
					</div>
					<select name="job" class="form-control">
						<option selected=""> Select job type</option>
						<option>Designer</option>
						<option>Manager</option>
						<option>Accounting</option>
					</select>
				</div> 
				<div class="form-group">
					<button type="submit" value="check" class="btn btn-primary btn-block"> Create User List  </button>
				</div> 
			</form>
		</div>
		<div class="row col-lg-10 offset-4">			<?php pre_r($_POST); ?>
</div>
	</div>
	<script src="asset/js/jquery-3.4.1.slim.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>