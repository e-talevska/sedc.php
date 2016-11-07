<?php
// $first_name = 'Darijan';
// $first_last = 'Shekerov';
// $first_id = 3;

// $second_name = 'Mile';
// $second_last = 'Panika';
// $second_id = 14;

function print_person($name, $last, $id)
{
    echo 'Hello, my name is '.$name.' '.$last.', number '.$id.'.<br>';
}

// print_person($first_name, $first_last, $first_id);
// print_person($second_name, $second_last, $second_id);

$student3 = [
    'first' => 'Joe',
    'last' => 'Doe',
    'id' => 142
];

print_person($student3['first'], $student3['last'], $student3['id']);

class Student {
    var $first_name, $last_name, $index;
    
    function pecati () {
        echo "$this->first_name $this->last_name, $this->index<br>";
    } 

    function __construct($first_name = '', $last_name = '', $index = '') {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->index = $index;
        echo '<br>Constructor of class Student called<br>';
    }

    function __destruct() {
        echo '<br>Destructor for class Student called<br>';
    }
}

$student = new Student();
$student->first_name = 'Mike';
$student->last_name = 'Wazowski';
$student->index = 121;

echo $student->first_name;
echo '<br>';

unset($student);

$student2 = new Student('Petko', 'Petkovski', 23134);
var_dump($student2);
$student2->pecati();

?>
