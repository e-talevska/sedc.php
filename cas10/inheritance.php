<?php
class Book{
    protected $publisher, $author, $price,$title;
    
    function __construct($title, $price, $publisher, $author){
        echo"<br>".__CLASS__."Constructor called </br>";
        $this->publisher = $publisher;
        $this->author = $author;
        $this->price = $price;
        $this->title = $title;
    }
    function getPrice(){
        return $this->price . "<br>";
    }
}
$book = new Book("PHP & My SQL", 30, "Matica", "SEDC");
echo $book->getPrice();

class NovelBook extends Book{
   protected $genre;
   
   function __construct($title, $genre, $price, $publisher = '', $author= ''){
        echo"<br>".__CLASS__."Constructor called </br>";
        $this->genre = $genre;
        parent::__construct($title, $price, $publisher, $author);
//        $this->publisher = $publisher;
//        $this->author = $author;
//        $this->price = $price;
//        $this->title = $title;
   
   }    
   function getPrice(){
       return "The price is " . ($this->price + 30) . "<br>";
   }
}
$novelBook = new NovelBook("PHP & My SQL", "novel",  30, "Matica", "SEDC");
echo $novelBook->getPrice();
?>

