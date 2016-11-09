<?php
include "fakulteti.php";
use Fakultet\Fakultet;

// $finki=new Fakultet("finki" , "Nikola ristovski" , 50);
// //zacuvaj se vo baza t.e. db file.
// $finki->save();

// $finki=new Fakultet("feit" , "Nikola ristovski" , 50);
// //zacuvaj se vo baza t.e. db file.
// $finki->save();

// $feit=new Fakultet("sedc" , "Nikola ristovski" , 50);
// //zacuvaj se vo tbaza t.e. db file.
// $feit->save();

// $feit=new Fakultet("ugd" , "Nikola ristovski" , 50);
// //zacuvaj se vo baza t.e. db file.
// $feit->save();


$fakulteti=Fakultet::getAll();



?>


<!DOCTYPE html>
<html>
<head>
	<title>Fakulteti</title>
</head>
<body>


<ul>
	<?php  foreach ($fakulteti as $fakultet) {
	
		echo"<li>{$fakultet->id}. {$fakultet->ime}</li>";

	} ?>




</ul>

</body>
</html>