<?php
namespace Fakultet;
ini_set('display_errors', 'On');
class Fakultet {
    public $lokacija, $brUcilnici, $ime, $profesori, $studenti;
    static $brInstanci = 0;
    var $id;
    public function __construct ($ime, $lokacija, $ucilnici) {
        echo __CLASS__." constructor called, number of instance ".++self::$brInstanci." <br>";
        $this->ime = $ime;
        $this->brUcilnici = $ucilnici;
        $this->lokacija = $lokacija;
        $this->id = self::$brInstanci;
    }
    public static function welcome () {
        echo 'Welcome students!<br>';
    }
}
$elektro = new Fakultet ("FEIT", "Nikola Rusinski", 50);
echo $elektro->ime;
$finki = new Fakultet ("FINKI", "~~~~~~", 100);
echo $finki->id;
Fakultet::welcome();
?>