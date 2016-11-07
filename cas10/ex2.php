<style type='text/css'>
    p {
        font-family: sans;
    }
</style>
<?php
class Exp {
    var $a, $b;
    function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }
    function multiply () {
        return $this->a * $this->b;
    }
    function divide () {
        return number_format($this->a / $this->b, 2);
    }
    function add () {
        return $this->a + $this->b;
    }
    function subtract () {
        return $this->a - $this->b;
    }
    function print () {
        echo "<p>a: {$this->a}, b: {$this->b}</p>";
    }
}

$exp1 = new Exp (3, 5);
$exp1->print();
echo $exp1->multiply().'<br>';
echo $exp1->divide().'<br>';
echo $exp1->add().'<br>';
echo $exp1->subtract().'<br>';
?>