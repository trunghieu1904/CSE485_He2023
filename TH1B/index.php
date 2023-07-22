<?php
require_once 'controller/BookController.php';

$bookController = new BookController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $bookController->index();
        break;
    case 'add':
        $bookController->addBook();
        break;
    case 'sort':
        $bookController->sortBooks();
        break;
    default:
        echo "404 Not Found";
        break;
}
?>
