<?php
namespace Fakultet;
include 'files.php';

ini_set("display_errors", "On");


use FileManipulation\File;
class Fakultet {
    public $lokacija, $brUcilnici, $ime, $profesori, $studenti;
    static $brInstanci = 0;
    static $dbPath = 'db/fakulteti.csv';
    var $id;
    public function __construct ($ime, $lokacija, $ucilnici, $id = null) {
        ++self::$brInstanci;
        // echo __CLASS__." constructor called, number of instance ".++self::$brInstanci." <br>";
        $this->ime = $ime;
        $this->brUcilnici = $ucilnici;
        $this->lokacija = $lokacija;
        if(isset($id)) {
            $this->id = $id;
        } else {
            $this->id = self::$brInstanci;
        }
    }
    
    public function save() {
        $text = "{$this->id},{$this->ime},{$this->lokacija},{$this->brUcilnici}\n";
        
        $file = new File(self::$dbPath, 'a');
        
        $file->write($text);
    }
    
    public static function getAll() {
        $file = new File(self::$dbPath, 'r');
        
        $result = $file->read();
        $fakulteti = [];
        foreach ($result as $fakultet) {
            if (is_array($fakultet)) {
                $fakulteti[] = new Fakultet($fakultet[1], $fakultet[2], $fakultet[3], $fakultet[0]);
            }
        }
        
        return $fakulteti;
    }

    public static function welcome () {
        echo 'Welcome students!<br>';
    }
}
