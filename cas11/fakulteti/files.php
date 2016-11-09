<?php
namespace FileManipulation;
class File {
    private $path;
    private $mod;
    private $hendler;
    
    public function __construct($path,$mod) {
        
        $this->path=$path;
        $this->mod=$mod;
        $this->hendler=  fopen($this->path, $this->mod);
        
}

    public function write($text){
        $write_mods=['r+','w','w+','a','a+'];
        if(in_array($this->mod, $write_mods)){
            fwrite($this->hendler, $text);
        }   
    }
    
    public function read (){
        $read_mods=['r','r+','w+','a+'];
        $result =[];
        if(in_array($this->mod, $read_mods)){
            while(!feof($this->hendler))
            {
                //row=?array
              $row =  fgetcsv($this->hendler);
              $result[]=$row;
            }
        }
        return $result;
         }
        public function __destruct() {
        fclose($this->hendler);
    }

}

?>