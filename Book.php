<?php

// File: Book.php
require_once 'IBook.php';

class Book implements IBook {
    private $bookTitle;
    private $author;
    private $publisher;
    private $publicationYear;
    private $ISBN;
    private $chapters;

    public function __construct($title, $author, $publisher, $publicationYear, $ISBN, $chapters) {
        $this->bookTitle = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->publicationYear = $publicationYear;
        $this->ISBN = $ISBN;
        $this->chapters = $chapters;
    }

    public function getBookTitle() {
        return $this->bookTitle;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function getPublicationYear() {
        return $this->publicationYear;
    }

    public function getISBN() {
        return $this->ISBN;
    }

    public function getChapters() {
        return $this->chapters;
    }
}

?>
