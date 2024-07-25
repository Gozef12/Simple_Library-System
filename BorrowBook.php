<html>
    <body>
    <form action="BorrowBook" method = "post">
        <input type="number" name = "id">
    </form>    
    
<?php
include "SQL.php";
$id = $_POST["id"];
$db->BorrowBook($id);

?>
</body>
    
</html>