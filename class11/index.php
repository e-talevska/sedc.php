
<?php
include "static.php";

use Fakultet\Fakultet; // use e prvoto fak e imeto na namespace a vtoroto e imeto na klasata i ako sakame da korisitme i druga klasa od drugio fajl treba nanonvo da go povikuvame use Fakultet\ i imeto na klasata drugata sto sakame da ja koristime .. 

$elektro = new Fakultet\Fakultet("Skopje" , 45 , "Feit");
	echo $elektro->ime . "<br>";

$finki = new Fakultet\Fakultet("Skopje" , 49 , "Finki");
	echo $finki->ime . "<br>";


var_dump(Fakultet\Fakultet::$instanci);//taka so cetiri tocki pristapuvame do staticka vrednost vo klasa a pogore so self a moze i so fakultet da raboti.

var_dump(Fakultet\Fakultet::welcome());


?>