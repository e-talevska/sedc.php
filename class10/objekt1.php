<?php


class Calculator
{
	public $x;
	public $y;
	public $result;
	function __construct($prva , $vtora)
	{
		$this->x=$prva;
		$this->y=$vtora;
	}

	function sobiranje(){

		$this->result= $this->x + $this->y;
	}

	function odzemanje(){
		echo $this->x-$this->y;
	}

	function mnozenje(){
		echo $this->x*$this->y;
	}

	function delenje(){
		echo $this->x/$this->y;
	}
	function getresult(){
		return $this->result;
		//get result vrakja vrednost na result koga saka da pristapi do prvatna vrednost preku metod taka moze u metodo e povinaka privatnata vrednost i od tamo moze da se pristapi
	}

	function setx($r){
		if (is_int($r)) {
			$this->x=$r;
		}
	}

}
$a= new Calculator(5,3);
$a->sobiranje();
echo"<br>";
$a->odzemanje();
echo"<br>";
$a->mnozenje();
echo"<br>";
$a->delenje();





?>