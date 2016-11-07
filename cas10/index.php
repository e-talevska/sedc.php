<?php
$student1_name = "Bube";
$student2_name = "John";
$student_classes=['math','english'];

$student1_lastname = "Gj";
$student2_lastname ="Doe";

$student1_index = 123456;
$student2_index = 789456;
 

function pecati($name, $lastname, $index)  {
return "Pecati nadvor: Jas $name  $lastname  so index broj $index</br>";
    
}

$student3 = [
    'name' => 'Jane',
    'lastname' =>'Doe',
     'index'=>32456
];
 echo pecati ($student1_name, $student1_lastname, $student1_index);
 class Student {
    var $name;
    var $lastname;
    var $index;
    
    function __construct ($name,$lastname,$index)
    {
        echo"<br>Constructor of class student clled</br>";
        $this->name=$name;
        $this->lastname=$lastname;
        $this->index=$index;
    }
    
    function pecati(){
        echo "Pecati vo student: Jas {$this->name}". $this->lastname . "so index" . $this->index;
   
    }
    function __destruct() {
      echo"<br>Destruct of class student clled</br>";
    }
 }
 $student1 = new Student("John","Doe","123455");
 $student1->name='Bube';
 echo $student1->name;
   echo "</br>";
 $student1->pecati();
      var_dump($student1);
      
 $student2 = new Student("John","Doe","123455");
 $student2->name='Petko';
 $student2->lastname='Petkovski';
 $student2->index=12346;
 var_dump($student2);
?>
