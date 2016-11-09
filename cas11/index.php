<?php
namespace Routes;
use Fakultet\Fakultet;
include 'static.php';
$elektro = new Fakultet("FEIT", "Nikola Rusinski", 50);
echo $elektro->ime;
?>