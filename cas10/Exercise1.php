<?php
$student_firstname = 'Aleksandar';
$student_lastname = 'Zmejkoski';
$student_brindex = '12345';
$student_classes = ["math", "history"];

$student2_firstname = "Mitko";
$student2_lastname = 'Mitkovski';
$student2_brindex = '6789';
function pecati($name,$last_name,$index){
    return "Pecati nadvor: Jas $name $last_name so index $index<br>";
}
echo pecati($student_firstname, $student_lastname, $student_brindex);

class Student1{
    
    var $first_name;
    var $last_name;
    var $index;
    
    function __construct($first_name,$last_name,$index){
    echo "<br>Constructor od class Student caled";
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->index = $index;
    }
    
    function pecati(){
        echo "Pecati vo Student: Jas {$this->first_name}" . $this->last_name . "so index" . $this->index;
        
    }
    function __destruct(){
        echo "<br>Destructor for class Student called<br>";
    }
}

$student = new Student1("John", "Doe", "44234");
var_dump($student);
$student->first_name = "Ace";
echo $student->first_name;
echo "<br>";
$student->pecati();

$student1 = new Student1("John", "Doe", "44234");
$student1->first_name = "Petko";
$student1->last_name = "Petkovski";
$student1->index = "21341";
var_dump($student1);


        
?>