<?php
include 'fakulteti.php';
use Fakultet\Fakultet;

$finki = new Fakultet("Finki", "Nikola Rusinski bb", 50);
//zacuvaj se vo "baza"
$finki->save();

$feit = new Fakultet("Feit", "Nikola Rusinski bb", 30);
//zacuvaj se vo "baza"
$feit->save();

$feit = new Fakultet("SEDC", "Bla Bla bb", 10);
//zacuvaj se vo "baza"
$feit->save();
?>