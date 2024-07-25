<?php
/*
use php_project;
use php_project\Ebook;
use PDO;
use PDOException;

class Database{
    private $dbname = "simplelibrary";
    private $host = "localhost";
    private $dsn = "mysql:host = localhost;dbname=simplelibrary";
    private $dbuser = "admin";
    private $dbpass = "admin";
    private $pdo;
    
    public function __construct() {
        try {
            $pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
        
        }
        catch (PDOException $e) {
            echo "Connection failed". $e->getMessage();
        }
    }

    public function AddBook(EBook $book) {
        $query = "INSERT INTO books(Id,Title,Author,Isbn,Fileformat) Values(?,?,?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$book->GetId(), $book->GetTitle(), $book->GetAuthor(),$book->GetIsbn(),$book->getFileFormat()]);
        header("Location:../index.php");
    }

    public function ViewBooks(){
        $query = "SELECT * FROM books";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if(empty( $books )) {
            echo "there is no books here";
        }
        else {
            foreach($books as $book) {
                echo htmlspecialchars($book["Id"]);
                echo htmlspecialchars($book["Title"]);
                echo htmlspecialchars($book["Author"]);
                echo htmlspecialchars($book["Isbn"]);
                echo htmlspecialchars($book["Stat"]);
                echo htmlspecialchars($book["FileFormat"]);
        }
    }}

    public function BorrowBook($id){
        $query = "UPDATE books SET Stat = borrowed WHERE Id = $id;";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute("borrowed");
        header("Location:../index.php");

    }
};

$db = new Database();
*/

namespace php_project;

use PDO;
use PDOException;

class Database {
    private $dbname = "simplelibrary";
    private $host = "localhost";
    private $dsn = "mysql:host=localhost;dbname=simplelibrary";
    private $dbuser = "admin";
    private $dbpass = "admin";
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function AddBook(EBook $book) {
        $query = "INSERT INTO books(Id, Title, Author, Isbn, Fileformat) VALUES(?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$book->GetId(), $book->GetTitle(), $book->GetAuthor(), $book->GetIsbn(), $book->getFileFormat()]);
        header("Location: index.php");
    }

    
    public function ViewBooks(){
        $query = "SELECT * FROM books";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if(empty( $books )) {
            echo "there is no books here";
        }
        else {
            foreach($books as $book) {
                echo htmlspecialchars($book["Id"]);
                echo htmlspecialchars($book["Title"]);
                echo htmlspecialchars($book["Author"]);
                echo htmlspecialchars($book["Isbn"]);
                echo htmlspecialchars($book["Stat"]);
                echo htmlspecialchars($book["FileFormat"]);
        }
    }}

    public function BorrowBook($id){
        $query = "UPDATE books SET Stat = borrowed WHERE Id = $id;";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        header("Location:../index.php");

    }
};

$db = new Database();






