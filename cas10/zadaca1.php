<?php

  class Calculation {
      public $x;
      public $y;
      public $result;
      
      function __construct ($a,$b) {
              $this->x =$a;
              $this->y =$b;
           
  }
function sobiranje (){
$this->result= $this->x + $this->y;
}

  function delenje (){
return $this->x / $this->y;
}
function mnozenje (){
return $this->x * $this->y;
}
function odzimanje (){
return $this->x - $this->y;
  } 
  function getResult()
  {
      if(isset($this->result)){
      }
      else 
              {
              return 0;
      }
  }
  function setX($a){
      //prverka dali e int
      if(is_int($a)){
          $this->x=$a;
      }
  }
}

$calc= new Calculation(5, 10);
 $calc->delenje();
echo $calc->getResult();
$calc->setX("dsds");
echo "</br>";
$calc1= new Calculation(3, 14);
echo $calc1->sobiranje();
?>
