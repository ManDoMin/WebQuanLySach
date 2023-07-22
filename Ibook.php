<?php

// File: IBook.php

interface IBook {
    public function getBookTitle();
    public function getAuthor();
    public function getPublisher();
    public function getPublicationYear();
    public function getISBN();
    public function getChapters();
}

?>
