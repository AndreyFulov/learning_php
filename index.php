
<?php include_once "inc/header.php"?>
<?php
    require 'inc/connect.php';
    if(isset($_SESSION['login'])) {
        echo '<a href="'.$config['sub_url'].'/createPost.php">Написать статью</a><br>';
    }
    
    $result = $db_connect->query("SELECT * FROM articles ORDER BY id DESC");
    foreach($result as $row) {
        echo "<div class='short_article'>";
        echo "<a href=".$config['sub_url']."/post.php?articleId=".$row['id'].">".$row["title"]."</a><br>";
        echo "<p>".substr($row["content"],0,50)."...</p><br>";
        echo "<a>Автор: ".$row["author"]."</p>";
        echo "</div>";
    }
?>