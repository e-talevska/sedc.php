<?php
namespace Fakultet;

class Fakultet {

	public $lokacija;
	public $brUcilnici;
	public $ime;
	public $profesori;
	public $studenti;
	static $instanci=0;
	public $id;


	public function __construct($lokacija,$brUcilnici,$ime){

		echo  __CLASS__ . " Constructor called , number of instance " . ++self::$instanci . "<br>";

		$this->ime=$ime;
		$this->lokacija=$lokacija;
		$this->brUcilnici=$brUcilnici;
		$this->id=self::$instanci;

	}

	public static function welcome(){

		echo "welcome students";

	}





}


// $elektro = new Fakultet("Skopje" , 45 , "Feit");
// 	echo $elektro->ime . "<br>";

// $finki = new Fakultet("Skopje" , 49 , "Finki");
// 	echo $finki->ime . "<br>";


// var_dump(Fakultet::$instanci);//taka so cetiri tocki pristapuvame do staticka vrednost vo klasa a pogore so self a moze i so fakultet da raboti.

// var_dump(Fakultet::welcome());






?>