<?php
$student1_first_name = "Emi";
$student1_last_name = "Tal";
$student1_index = "21323";
$student1_classes = ['Math', 'History'];

$student2_first_name = "John";
$student2_last_name = "Doe";
$student2_index = "45453";

function pecati($name, $last_name, $index) {
    return "Pecati nadvor: Jas $name $last_name, so index $index <br>";
}

$student3 = [
  'first_name' => "Joe",
  'last_name' => 'Doe',
   'index' => 34234
];

echo pecati($student1_first_name, $student1_last_name, $student1_index);

class Student {
    public $first_name;
    public $last_name;
    public $index;
    
    function __construct($first_name, $last_name, $index) {
        echo "<br>Constructor of class Student called<br>";
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->index = $index;
    }
            
    function pecati() {
        echo "Pecati vo Student: Jas {$this->first_name} " . $this->last_name . " so index " . $this->index;
    }
    
    function __destruct() {
        echo "<br>Destructor for class Student called<br>";
    }
}

$student1 = new Student("John", "Doe", "44234");
var_dump($student1);
$student1->first_name = "Emi";
echo $student1->first_name;
echo "<br>";
$student1->pecati();

//unset($student1);
$student1 = "sdfdsf";

$student2 = new Student("John", "Doe", "44234");
$student2->first_name = "Petko";
$student2->last_name = "Petkovski";
$student2->index = "23213";
var_dump($student2);
?>