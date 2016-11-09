<?php
include 'fakulteti.php';
use Fakulteti\Fakultet;

$FINKI = new Fakultet ("Finki", "Nikola Rustinski", 50);
//zacuvaj vo baza 
$FINKI->save ();

$FINKI = new Fakultet ("Feit", "Nikola Rustinski", 30);
//zacuvaj vo baza 
$FINKI->save ();

$FINKI = new Fakultet ("SEDC", "Bla Bla bb", 10);
//zaucuvaj vo baza 
$FINKI->save (); 
?>