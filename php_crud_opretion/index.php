<?php 
require_once("../php_crud_opretion/php/component.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book Store</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-dark text-light rounded"><i class="fa fa-bookmark" aria-hidden="true"></i> Book Store</h1>
			<div class="d-flex justify-content-center">
				<form action="" method="post">
					<div class="py-2">
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text bg-warning"><i class="fa fa-id-badge" aria-hidden="true"></i></div>
								<input type="text" autocomplete="off" class="form-control" id="inlineFormInputGroup" placeholder="ID">
							</div>
						</div>
					</div>
					<div class="py-2">
						<?php inputElement("<i class='fa fa-book'></i>", "Book Name", "book_name"); ?>
					</div>
				</form>
		</div>
	</div>
</main>

<script src="asset/js/jquery-3.4.1.slim.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>