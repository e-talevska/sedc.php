<?php
abstract class Book {
    protected $publisher;
    protected $author;
    protected $price;
    protected $title;
    
    function __construct($title, $price,  $publisher='', $author='') {
        echo "<br>".__CLASS__."Constructor called</br>";
                $this->publisher = $publisher;
                $this->author=$author;
                $this->price=$price;
                $this->title=$title;
    }
    function getPrice (){
        return "This price is" . $this->price . "</br>";
    }
    abstract function getGenre();
}

//$book = new Book("PHP & MySQL",20,"Matica", "SEDC");
//echo $book ->getPrice();

class NovelBook extends Book {
    protected $genre;
    //inherits $title, $genre, $price, $publisher= $author
    
    function __construct($title, $genre, $price, $publisher='', $author='') {
        echo "<br>".__CLASS__."Constructor called</br>";
                $this->genre=$genre;
                parent::__construct($title, $price,$publisher,$author);
              // $this->publisher = $publisher;
             // $this->author=$author;
             // $this->price=$price;
             // $this->title=$title;
    
}
 function getPrice (){
        return "This price is" . ($this->price +20) . "</br>";
 }
 
 function getGenre() {
     return $this->genre;
 }
}
$novelBook= new NovelBook ("PHP & MySQL","novel", 20,"Matica", "SEDC");
echo $novelBook->getPrice();
?>
