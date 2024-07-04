<?php include_once "inc/header.php";
include "inc/connect.php";?>

<?php
$result = mysqli_num_rows($db_connect->query("SELECT * FROM articles WHERE id = '$_GET[articleId]'"));
if($result == 0){
    echo "Статья не найдена :(";
}
else{
    $result = $db_connect->query("SELECT * FROM articles WHERE id = $_GET[articleId]");
    $row = $result->fetch_assoc();
    $title = $row["title"]; 
    $content = $row["content"];
    $author = $row["author"];
    if(isset($_SESSION['login'])) {
        if($_SESSION['login'] == $author) {
            echo "<a>Снести статью</a>";
        }
    }
    echo "<h1>".$title."</h1>";
    echo "<a style='font-size:15px'>".$author  ."</a>";
    echo "<p>.$content.</p>";

}
?>
