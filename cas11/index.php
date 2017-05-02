<?php
namespace Routes;

use Fakultet\Fakultet;
use Fakultet\Student;

include 'static.php';

$elektro = new Fakultet("FEIT", "Nikola Rusinski", 50);
echo $elektro->ime;

$finki = new Fakultet("FINKI", "Nikola Rusinski", 20);
echo $finki->ime;


var_dump(Fakultet::$brInstanci);
var_dump(Fakultet::welcome());
?>