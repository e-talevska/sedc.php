<?php
namespace Fakultet;
include "files.php";

class Fakultet {

	public $lokacija;
	public $brUcilnici;
	public $ime;
	public $profesori;
	public $studenti;
	static $instanci=0;
	public $id;
	static $dbPath='db\fakulteti.csv';


	public function __construct($lokacija,$brUcilnici,$ime,$id=null){
	++self::$instanci;
		//echo  __CLASS__ . " Constructor called , number of instance " . ++self::$instanci . "<br>";

		$this->ime=$ime;
		$this->lokacija=$lokacija;
		$this->brUcilnici=$brUcilnici;

		if (isset($id)) 
		{
			$this->id=$id;
		}
		else{
		$this->id=self::$instanci;
			}
	
	}
	public function save(){

		$text="{$this->id},{$this->ime},{$this->lokacija},{$this->brUcilnici}\n";
		

		$file=new \FileManipulation\File(self::$dbPath, "a");
		$file->write($text);



	}

	public static function getAll(){

		$file=new \FileManipulation\File(self::$dbPath, "r");
		$result=$file->read();

		
		$fakulteti=[];
		foreach ($result as $fakultet) {
				
				if(is_array($fakultet))
				{
				$fakulteti[]=new Fakultet($fakultet[1],$fakultet[2],$fakultet[3],$fakultet[0]);

					}
		
		}
		
		return $fakulteti;

	}

	public static function welcome(){

		echo "welcome students";

	}


}



?>