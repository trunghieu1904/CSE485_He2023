<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
</head>
<body>
    <h1>Book List</h1>
    <a href="index.php?action=add">Add Books</a> |
    <a href="index.php?action=sort&sort=author">Sort by Author</a> |
    <a href="index.php?action=sort&sort=title">Sort by Title</a> |
    <a href="index.php?action=sort&sort=year">Sort by Publication Year</a>
    <br><br>
    <?php foreach ($books as $book): ?>
        <p><?= $book->getBookInfo() ?></p>
    <?php endforeach; ?>
</body>
</html>
