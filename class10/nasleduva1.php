<?php

	
	abstract class Book
	{
		
		protected $publisher;
		protected $author;
		protected $price;
		protected $title;


		function __construct($publisher,$author,$price,$title){
			echo"<br>".__CLASS__." Constructor called</br>";


			$this->publisher=$publisher;
			$this->author=$author;
			$this->price=$price;
			$this->title=$title;
		}
		function getprice(){
			return "the price is " . $this->price;
		}

		abstract function getGerne();

	}






	// $book=new Book("tose" , "kostadinovski", 200, "php and mysql");
	// echo$book->getprice();





	class NovelBook extends Book{
		protected $genre;
		//Novelbook gi nasleduva tiee podolnite vlezni parametri publiser... price , title

		function __construct($publisher,$genre,$author,$price,$title){
			echo"<br>".__CLASS__." Constructor called1</br>";

			$this->genre=$genre;

			parent::__construct($publisher,$author,$price,$title);
			// $this->publisher=$publisher;
			// $this->author=$author;
			// $this->price=$price;
			// $this->title=$title;
		}
		function getprice(){
			return "the price is " . ($this->price+20) . "<br>";
		}
		function getGerne(){
			return $this->genre;
		}

	}


	$novelbook=new NovelBook("tose" ,"novel","kostadinovski", 200, "php and mysql");
	echo$novelbook->getprice();
	echo$novelbook->getGerne();
?>