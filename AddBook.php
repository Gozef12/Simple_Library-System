<?php
require __DIR__ . '/vendor/autoload.php';

use php_project\EBook;
use php_project\Database;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"]) && isset($_POST["title"]) && isset($_POST["author"]) && isset($_POST["isbn"]) && isset($_POST["fileformat"])) {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $author = $_POST["author"];
        $isbn = $_POST["isbn"];
        $fileFormat = $_POST["fileformat"];

        $book = new EBook($id, $title, $author, $isbn, "available", $fileFormat);

        $db = new Database();
        $db->AddBook($book);
    } else {
        echo "All fields are required.";
    }
}
?>

<html>
<body>
    <form action="AddBook.php" method="post">
        Book id: <input type="number" name="id"><br>
        Book Title: <input type="text" name="title"><br>
        Book Author: <input type="text" name="author"><br>
        Book Isbn: <input type="number" name="isbn"><br>
        Book Format: <input type="text" name="fileformat"><br>
        <input type="submit">
    </form>
</body>
</html>
