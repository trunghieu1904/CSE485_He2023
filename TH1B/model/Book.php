<?php
interface IBook {
    public function getBookInfo();
    public function getAuthor();
    public function getTitle();
    public function getPublicationYear();
}

class Book implements IBook {
    private $title;
    private $author;
    private $publisher;
    private $publicationYear;
    private $isbn;
    private $chapters;

    public function __construct($title, $author, $publisher, $publicationYear, $isbn, $chapters) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->publicationYear = $publicationYear;
        $this->isbn = $isbn;
        $this->chapters = $chapters;
    }

    public function getBookInfo() {
        return "Title: " . $this->title . ", Author: " . $this->author . ", Publisher: " . $this->publisher . ", Year: " . $this->publicationYear . ", ISBN: " . $this->isbn;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPublicationYear() {
        return $this->publicationYear;
    }
}
