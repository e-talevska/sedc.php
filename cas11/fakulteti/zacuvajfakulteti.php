<?php
include './fakulteti.php';
use Fakultet\Fakultet;

ini_set("display_errors", "On");
include 'fakulteti.php';
use Fakultet\Fakultet;
$finki = new Fakultet("FINKI", "Nikola Rusinski bb", 50);
$finki->save();
