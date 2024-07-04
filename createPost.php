<?php include_once "inc/header.php";
include "inc/connect.php";?>


<div class="form-container">
        <h2>Создание статьи</h2>
        <form action="createPost.php" method="POST">
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Содержание</label>
                <textarea id="content" name="content" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="do_setArticle">Создать статью</button>
            </div>
        </form>
    </div>
<?php
if(isset($_POST['do_setArticle'])) {
    $title = htmlentities($_POST['title']);
    $content = htmlentities($_POST['content']);
    if($title != '' AND $content != '' AND isset($_SESSION['login'])) {
        $result = $db_connect->query("INSERT articles(title,content, author) VALUES('$title','$content','$_SESSION[login]');");
        echo 'Пост создан!';
    }else{
        echo 'Произошла ошибка!';
    }
}
?>