<?php

class SimpleBook {
    private $author;
    private $title;
    function __construct($authorName, $titleName) {
        $this->author = $authorName;
        $this->title  = $titleName;
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}

class BookAdapter {
    private $book;
    function __construct(SimpleBook $book_in) {
        $this->book = $book_in;
    }
    function getAuthorAndTitle() {
        return $this->book->getTitle(). " by ". $this->book->getAuthor();
    }
}


  echo 'BEGIN TESTING ADAPTER PATTERN';
  echo  ' ';

  $book = new SimpleBook("Gamma, Helm, Johnson and Vlissides", "Design Patterns");
  $bookAdapter = new BookAdapter($book);
  echo 'Author and Title: '.$bookAdapter->getAuthorAndTitle();
  echo ' ';

  echo 'END TESTING ADAPTER PATTERN';

 
?>