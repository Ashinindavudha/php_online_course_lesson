<?php 
require_once('config.php'); //copy to ---


    // sql to create table
$sql = "CREATE TABLE profileimg (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userid INT(11) NOT NULL,
status INT(11) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Students created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

 ?>