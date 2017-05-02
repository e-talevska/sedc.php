<?php

$student1 = [
    'Stefan',
    'ristevski',
    '135062'
];
$student2 =[
    'Emilija',
    'Talevska',
    '13342'
];




function pecati ($name , $lastname , $index){
    return "Jas $name $lastname, so index $index";
}
echo pecati($student1[0], $student1[1], $student1[2]);

class Student {
    var $firstname;
    var $lastname;
    var $index;
    
    function pecati(){
        echo "Jas {$this->firstname} " . $this->lastname . " so index " . $this->index;
    }
    function __construct($first_name , $lastname, $index){
      echo "<br>Constructor of class Student called"; 
      $this->firstname = $first_name;
      $this->lastname = $lastname;
      $this->index = $index;
             
    }
    
    function __destruct() {
        echo "<br>Destructor for class Student called";
    }
}
echo '<br>';
$student1 = new Student('John', "Doe", "3123123");
var_dump($student1);
$student1->firstname = 'Stef';
$student1->lastname = 'Ris';
$student1->index = '12345';

$student1->pecati();
echo '<br>';

echo $student1->firstname;
echo '<br>';
$student2 = new Student("Joe", "doe", "2131");
var_dump($student2);
$student2->firstname = 'Petko';
$student2->lastname = 'petkovski';
$student2->index = '123124';

echo $student2->firstname;


?>

