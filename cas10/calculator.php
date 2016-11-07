<?php
class MyCaluclator {
    private $x;
    public $y;
    private $result;
            
    function __construct($a, $b) {
        $this->setX($a);
        $this->y = $b;
    }
    
    function sobiranje() {
        $this->result = $this->x + $this->y;
    }
    
    function odzemanje() {
        return $this->x - $this->y;
    }
    
    function mnozenje() {
        return $this->x * $this->y;
    }
    
    function delenje() {
        return $this->x / $this->y;
    }
    
    function getResult() {
        if(isset($this->result)) {
            return $this->result;
        } else {
            return 0;
        }
        
    }
    
    function setX($a) {
        //proverka, dali e int
        if(is_int($a)) {
            $this->x = $a;
        }
    }
}

$calc = new MyCaluclator(10, 7);
$calc->delenje();
echo $calc->getResult();
$calc->setX("dsds");
echo "<br>";

$calc1 = new MyCaluclator(3, 4);
echo $calc1->sobiranje();
?>
