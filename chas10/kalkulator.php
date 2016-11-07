<?php

class kalkulator {
    public $x;
    public $y;
    
    function __construct($x , $y) {
        $this->x = $x;
        $this->y = $y;
    }
    
    function sobiranje(){
        $z=$this->x + $this->y;
        echo "$this->x + $this->y = $z";
    }
    
    function odzemanje(){
        $z=  $this->x - $this-> y;
        echo "<br> $this->x - $this->y = $z";
    }
    
    function mnozenje(){
        $z = $this->x * $this-> y;
        echo "<br> $this->x * $this->y = $z";
    }
    
    function delenje(){
        $z = $this->x / $this->y;
        echo "<br>$this->x / $this->y = $z";
    }
    
    function setX(){
        if(is_int($a)){
            $this->x = $a;
        }
    }
}

$broj = new kalkulator(4,2);


$broj->sobiranje();

$broj->odzemanje();
$broj->mnozenje();
$broj->delenje();
?>
