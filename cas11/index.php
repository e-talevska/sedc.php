<?php
include 'static.php';
$electro = new Fakultet\Fakultet ("FEIT", "Nikola Rustinski", 50);
         echo $electro->ime;
         echo "</br>";
$FINKI = new Fakultet\Fakultet ("FEIT", "Nikola Rustinski", 20);
         echo $FINKI->ime;
         var_dump(Fakultet\Fakultet:: $brInstanci);
         var_dump(Fakultet\Fakultet::welcome());
?>

