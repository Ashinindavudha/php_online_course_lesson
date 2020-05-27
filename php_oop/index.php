<?php 
class Student {
	public $name = 'Ashin Indavudha';
	public $attandence = true;
	public $totalMarks = 89;
}

$student = new Student();
echo $student->name . "<br>";
echo $student->attandence . "<br>";
echo $student->totalMarks;
 ?>