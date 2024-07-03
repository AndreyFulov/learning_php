
<?php include_once "inc/header.php"?>

<?php
    require 'inc/connect.php';
    $result = $db_connect->query("SELECT * FROM users");
    foreach($result as $row) {
        echo "Login:".$row["username"]."<br>";
        echo "pass:".$row["password"]."<br><br>";
    }
?>