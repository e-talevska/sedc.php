<?php
namespace Fakultet;
include 'files.php';
class Fakultet {
    public $lokacija;
    public $brUcilnici;
    public $ime;
    public $profesori;
    public $studenti;
    static $brInstanci = 0;
    static $dbPath = 'db\fakulteti.csv';
    public $id;

    public function __construct($ime, $lokacija, $ucilnici, $id = null) {
        ++self::$brInstanci;
//        echo __CLASS__ . " contructor called, number of instance" . ++self::$brInstanci . "<br>";
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
        $file = new \FileManipulation\File(self::$dbPath, "a");
        $file->write($text);
    }
    
    public static function getAll() {
        $file = new \FileManipulation\File(self::$dbPath, "r");
        $result = $file->read();
        $fakulteti = [];
        foreach ($result as $fakultet) {
            if(is_array($fakultet)) {
                $fakulteti[] = new Fakultet($fakultet[1], $fakultet[2], $fakultet[3], $fakultet[0]); 
            }
        }
        return $fakulteti;
    }
    
    public static function welcome() {
        echo "Welcome students <br>";
    }
}
?>