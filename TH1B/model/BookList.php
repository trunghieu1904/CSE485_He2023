<?php

class BookList {
    public $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function sortBooksByAuthor() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    public function sortBooksByTitle() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getTitle(), $b->getTitle());
        });
    }

    public function sortBooksByPublicationYear() {
        usort($this->books, function($a, $b) {
            return $a->getPublicationYear() - $b->getPublicationYear();
        });
    }

    public function getAllBooks() {
        return $this->books;
    }
}
