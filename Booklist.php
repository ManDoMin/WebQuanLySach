<?php

require_once 'Book.php';

class BookList {
    private $books = array();

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    public function sortBooksByAuthor() {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    public function sortBooksByTitle() {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getBookTitle(), $b->getBookTitle());
        });
    }

    public function sortBooksByPublicationYear() {
        usort($this->books, function ($a, $b) {
            return $a->getPublicationYear() - $b->getPublicationYear();
        });
    }
}

?>
