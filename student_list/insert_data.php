<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Data</title>
</head>
<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_lists";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students (name, class, reg_no, roll_no, phone, address)
VALUES ('AshinIndavudha', 'MA', 'SBA-M - 00024', 'MM -009', 'Mandalay')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>