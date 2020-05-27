<?php 
require_once('config.php'); //copy to ---


    // sql to create table
$sql = "CREATE TABLE students (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
class VARCHAR(100) NOT NULL,
reg_no VARCHAR(100),
roll_no VARCHAR(100),
phone VARCHAR(100),
address VARCHAR(255) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Students created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

 ?>