<?php
namespace Fakultet;
class Fakultet {
    public $lokacija;
    public $brUcilnici;
    public $ime;
    public $profesori;
    public $studenti;
    static $brInstanci = 0;
    public $id;

    public function __construct($ime, $lokacija, $ucilnici) {
        echo __CLASS__ . " contructor called, number of instance" . ++self::$brInstanci . "<br>";
        $this->ime = $ime;
        $this->brUcilnici = $ucilnici;
        $this->lokacija = $lokacija;
        $this->id = self::$brInstanci;
    }
    
    public static function welcome() {
        echo "Welcome students <br>";
    }
}

class Student {
    
}
?>

