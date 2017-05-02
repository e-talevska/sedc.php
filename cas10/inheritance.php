<?php
abstract class Book {
    protected $publisher, $author, $price, $title;
    
    function __construct($title, $price, $publisher = '', $author ='' ) {
        echo "<br>".__CLASS__." Constructor called</br>";
        $this->publisher = $publisher;
        $this->author = $author;
        $this->price = $price;
        $this->title = $title;
    }
    
    function getPrice() {
        return "The price is " . $this->price . "<br>";
    }
    
    abstract function getGerne();
}

//$book = new Book("PHP & MySQL", 20, "Matica", "SEDC");
//echo $book->getPrice();

class NovelBook extends Book{
    protected $genre;
    //inherits $publisher, $author, $price, $title
    
    function __construct($title, $genre, $price, $publisher = '', $author ='' ) {
        echo "<br>".__CLASS__." Constructor called</br>";
        $this->genre = $genre;
        parent::__construct($title, $price, $publisher, $author);
//        $this->publisher = $publisher;
//        $this->author = $author;
//        $this->price = $price;
//        $this->title = $title;
    }
    
    function getPrice() {
//        $result = parent::getPrice();
        return "The price is " . ($this->price + 20) . "<br>";
    }
    
    function getGerne() {
        return $this->genre;
    }
}

class FictionBook extends Book {
    function getGerne() {
        return "Sadsad";
    }
}

$novelBook = new NovelBook("PHP & MySQL", "novel" , 20, "Matica", "SEDC");
//echo $novelBook->getPrice();
//echo $novelBook->getGerne();
$fictionBook = new FictionBook("PHP & MySQL" , 20, "Matica", "SEDC");
$niza = [
    $novelBook,
    $fictionBook
];

foreach ($niza as $bookObject) {
    echo $bookObject->getGerne();
}
?>

