<?php
namespace Fakulteti;
include 'files.php';
class Fakultet {
    public $lokacija;
    public $brUcilnici;
    public $profesori;
    public $studenti;
    public $ime;
    static $brInstanci = 0;
    static $dbPath = 'db\fakulteti.csv';
    public $id;


    public function __construct($ime, $lokacija, $ucilnici, $id = null, $profesori = [], $studenti=[]) {
         ++self:: $brInstanci;
        //echo __CLASS__ .  " constructor called number of instance is " . ++self:: $brInstanci . "</br>";
        $this->ime= $ime;
        $this->lokacija= $lokacija; 
        $this->brUcilnici=$ucilnici;
        if(isset($id)) {
            $this->id=$id;
        } else {
            $this->id=self::$brInstanci;
        }
        
        $this->id=self::$brInstanci;
    }
    
    public function save(){
        $text = "{$this->id},{$this->ime},{$this->lokacija},{$this->brUcilnici}\n";
        //var_dump($text);
        $file = new \FileManipulation\File(self::$dbPath, "a");
        $file->write($text);
    }

    public static function getAll(){
        $file = new \FileManipulation\File(self::$dbPath,"r");
        $result =$file->read();
        var_dump($result);
        
        $fakulteti = [];
        
        foreach ($result as $fakultet) {
            if(is_array($fakultet)) {
            $fakulteti[]= new Fakultet ($fakultet[1],$fakultet[2],$fakultet[3], $fakultet[0]);
            }
        }
        var_dump($fakulteti);
        return $fakulteti;
    }

    public static function welcome () {
            echo "Welcome students</br>"; 
    }
}
 
?>