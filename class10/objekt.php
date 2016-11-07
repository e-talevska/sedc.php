<?php

$student_name="todor";
$student_lastname="ilievski";
$student_index=101;
$student_classes=['math' , 'history'];


$student1_name="kiko";
$student1_lastname="kostadinovski";
$student1_index=102;

$student3=['first_name'=>'joe','last_name'=>'doe','index'=>'12323'];


function student($name,$lastname,$index){

	echo"jas studentot " . $name ." " . $lastname . " so indeks " . $index . "sum cetvrta godina na fakultetot po informatika";
}



student($student_name,$student_lastname,$student_index);

echo"<br>";


/**
* 
*/
class Student
{
	public $first_name;
	public $last_name;
	public $index;


	function __construct($first_name,$lastname,$index){

		echo"<br> constructor of class students called<br>";

		$this->first_name=$first_name;
		$this->last_name=$lastname;
		$this->index=$index;
	}

	function pecati(){

		echo" Pecati vo studetn  . . . Jas " . $this->first_name . $this->last_name . " so indeks" . $this->index ;

	}


	function __destruct(){
		echo"<br>Destruktor for asdhsd calesddd asd sd <br>";
	}
	
}


$student1 = new Student("jo" , "koko" , "213123");
var_dump($student1);
$student1->first_name="emilll";
echo$student1->first_name . "<br>";

$student1->pecati();




$student2= new Student("josdos" , "asdww" , "12323");
var_dump($student2);
$student2->first_name="petko";
$student2->lastname="petkovski";
$student2->index="123123";
var_dump($student2);
echo$student2->first_name . "<br>";



?>