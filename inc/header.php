<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php session_start(); include "config/config.php"; echo $config["title"];?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="nav-bar">
            <div class="logo"><?php echo $config["title"];?></div>
            <nav>
                <ul>
                    <li><a href="<?php  echo $config['sub_url']?>/">Главная</a></li>
                    <li><a href="<?php if(isset($_SESSION['login'])){
                        echo $config['sub_url'],'/logout.php';
                    }else{ echo $config['sub_url'],'/login.php';}
                    ?>">
                    <?php if(isset($_SESSION['login'])) {
                        echo "Выйти";}
                        else{
                            echo "Войти";
                        }?>
                        </a></li>
                    <li><a href="<?php echo $config["sub_url"]?>/articles">Статьи</a></li>
                    <li><a href="<?php echo $config["sub_url"]?>/contacts">Контакты</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Поиск...">
            </div>
        </div>
    </header>

</body>
</html>