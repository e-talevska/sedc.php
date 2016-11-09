<?php
namespace Fakultet;
class Fakultet {
    public $lokacija;
    public $brUcilnici;
    public $profesori;
    public $studenti;
    public $ime;
    static $brInstanci = 0;
    public $id;


    public function __construct($ime, $lokacija, $ucilnici, $profesori = [], $studenti=[]) {
         
        echo __CLASS__ .  " constructor called number of instance is " . ++self:: $brInstanci . "</br>";
        $this->ime= $ime;
        $this->lokacija= $lokacija; 
        $this->brUcilnici=$ucilnici;
        $this->id=self::$brInstanci;
    }
    public static function welcome () {
            echo "Welcome students</br>"; 
    }
}
 
?>

