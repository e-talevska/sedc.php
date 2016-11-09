<?php
namespace FileManipulation;
class File{

	private $path;
	private $mod;
	private $handler;


	public function __construct($path,$mod){

		$this->path=$path;
		$this->mod=$mod;
		$this->handler=fopen($this->path, $this->mod);


	}

	public function write($text){

		$write_mods=["r+" , "w " , "w+" , "a" , "a+"];

		if (in_array($this->mod, $write_mods)) {
			
			fwrite($this->handler,$text);


		}

	}

	public function read(){

		$read_mods=['r' , 'r+' , 'w+' , 'a+'];
		$result=[];

		if (in_array($this->mod, $read_mods)) {
			
			while(!feof($this->handler)){
//row e array 
				$row=fgetcsv($this->handler);
				$result[]=$row;
			}


		}
		return $result;


	}


	public function __destruct(){

		fclose($this->handler);

	}

}


?>