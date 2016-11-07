<?php
    

   abstract class Book{
        protected $publisher;
        protected $author;
        protected $price;
        protected $title;
        
        function __construct($publisher, $author, $price, $title) {
            echo "<br>" . __CLASS__ . " Constructor called</br>";
            
            $this->publisher = $publisher;
            $this->author = $author;
            $this->price = $price;
            $this->title = $title;
        }
        
        function  getPrice(){
            return "The price is " .$this->price . "<br>";
     }
        
     abstract function getGenre();
    }

   //$book = new Book("Matica", "PHP & MySql", 20, "book title");
    //echo $book->getPrice();
    
    class NovelBook extends Book{
        protected $genre;
        //inherits $publisher, $author, $price, $title
        
        function __construct($title, $genre, $price, $publisher, $author) {
            echo "<br>" . __CLASS__ . " Constructor called</br>";
            
//            $this->publisher = $publisher;
//            $this->author = $author;
//            $this->price = $price;
//            $this->title = $title;
            $this->genre = $genre;
            parent::__construct($publisher, $author, $price, $title);
        }
        
        function getPrice() {
            return "The price is " . ($this->price + 20) . "<br>";
        }
        
        function getGenre() {
            return $this->genre;
        }
        
    }
    
    $novelBook = new NovelBook("PHPPPP","novel", 20, "SEDC", "Mat");
    echo $novelBook->getPrice();
    echo $novelBook->getGenre();
?>

