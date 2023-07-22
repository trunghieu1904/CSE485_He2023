<?php
require_once 'model/Book.php';
require_once 'model/BookList.php';

class BookController {
    private $bookList;

    public function __construct() {
        $this->bookList = new BookList();
    }

    public function index() {
        $books = $this->bookList->getAllBooks();
        require 'view/book-list.php';
    }

    public function addBook() {
        $book1 = new Book("Book 1", "B Author", "Publisher X", 2000, "ISBN1234", ["Chapter 1", "Chapter 2"]);
        $book2 = new Book("Book 2", "A Author B", "Publisher Y", 1995, "ISBN5678", ["Chapter 1", "Chapter 2", "Chapter 3"]);
        $book3 = new Book("Book 3", "C Author C", "Publisher Z", 2010, "ISBN9876", ["Chapter 1", "Chapter 2", "Chapter 3", "Chapter 4"]);

        $this->bookList->addBook($book1);
        $this->bookList->addBook($book2);
        $this->bookList->addBook($book3);

       $this->index();
    }

    public function sortBooks() {
        $sortType = isset($_GET['sort']) ? $_GET['sort'] : 'author';
        $book1 = new Book("Book 1", "B Author", "Publisher X", 2000, "ISBN1234", ["Chapter 1", "Chapter 2"]);
        $book2 = new Book("Book 2", "A Author B", "Publisher Y", 1995, "ISBN5678", ["Chapter 1", "Chapter 2", "Chapter 3"]);
        $book3 = new Book("Book 3", "C Author C", "Publisher Z", 2010, "ISBN9876", ["Chapter 1", "Chapter 2", "Chapter 3", "Chapter 4"]);

        $this->bookList->addBook($book1);
        $this->bookList->addBook($book2);
        $this->bookList->addBook($book3);

        switch ($sortType) {
            case 'author':
                $this->bookList->sortBooksByAuthor();
                break;
            case 'title':
                $this->bookList->sortBooksByTitle();
                break;
            case 'year':
                $this->bookList->sortBooksByPublicationYear();
                break;
            default:
                break;
        }

        $this->index();
    }
}
?>
