<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP FILE HANDLING</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>File Handling Using OOP In PHP</h1>
	<?php 
	require_once('file.php');
	if (isset($_POST['sumbit']) && $_POST['submit'] == 'write') {
		$file = new File;
		if ($file->writeData($_POST['data'])) {
			echo "Data Saved";
		}else {
			echo 'Something went wrong while saving';
		}
	}
	 ?>
	
<form class="form-horizontal" action="index.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<div class="formgroup">
			<div class="col-md-8">
				<label for="data">Enter Text / Load File</label>
				<textarea class="form-control" name="data" id="data" cols="30" rows="10"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1">
				<button id="write" name="submit" value="write" class="btn btn-primary">Write</button>
			</div>
			<div class="col-md-4">
				<input type="file" id="file" name="file" class="btn btn-primary">
			</div>
			<div class="col-md-1">
				<button id="read" name="submit" value="read" class="btn btn-success">Read</button>
			</div>
			<div class="col-md-1">
				<button id="delete" name="submit" value="delete" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</fieldset>
</form>
<?php 
	
	if (isset($_POST['sumbit']) && $_POST['submit'] == 'read') {
		$file = new File;
		print_r($_FILE); exit;
		$fname = $_FILE['file']['name'];
		if ($file->writeData($_POST['data'])) {
			echo "Data Saved";
		}else {
			echo 'Something went wrong while saving';
		}
	}
	 ?>
	</div>

	<script src="asset/js/jquery-3.4.1.slim.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>