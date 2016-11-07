<?php

abstract class Book {
    protected $publisher, $author, $price, $title;
    function __construct($title = '', $price = '', $publisher = '', $author = '')
    {
        echo '<p>'.__CLASS__.' constructor called </p>';
        $this->publisher = $publisher;
        $this->author = $author;
        $this->price = $price;
        $this->title = $title;
    }
    function getPrice () {
        return $this->price;
    }
    abstract function getGenre();
}

// $book1 = new Book ('PHP & MySQL', 20, 'Matica', 'SEDC');
// echo "<p> {$book1->getPrice()} </p>";

class NovelBook extends Book {
    protected $genre;
    function __construct($title = '', $genre = '', $price = '', $publisher = '', $author = '')
    {
        echo '<p>'.__CLASS__.' constructor called </p>';
        
        $this->genre = $genre;
        parent::__construct($title, $price, $publisher, $author);
    }

    function getPrice() {
        return parent::getPrice() /* this calls the parent's getPrice() method and returns the result */ + 20;
        /* the former statement will return the actual price plus 20 */
    }

    function getGenre () {
        return $this->genre;
    }
}

$novelbook = new NovelBook ('PHP & MySQL', 'Novel', 20, 'Matica', 'SEDC');
echo "<p> {$novelbook->getPrice()} </p>";
echo "<p> {$novelbook->getGenre()} </p>"
?>