<?php 
class Student {
	public $name;// = 'Ashin Indavudha';
	public $attandence;// = true;
	public $totalMarks;// = 89;

public function StudentDetails($name,$attandence,$totalMarks) {
$this->name = $name;
$this->attandence = $attandence;
$this->totalMarks = $totalMarks;
	}
}

$class10 = new Student();
$class10->StudentDetails('Ashin Indavuda', False, 99);
echo $class10->name . "<br>";
echo $class10->attandence . "<br>";
echo $class10->totalMarks . "<br>";
 ?>