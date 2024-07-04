<?php
include_once "inc/header.php";
include "inc/connect.php";
?>

<form action="login.php" method="post">
    <label>Логин</label><input type="text" name="login"><br>
    <label>Пароль</label><input type="password" name="password"><br>
    <input type="submit" value="Войти" name="do_login">
    <br>
    <p>Нет аккаунта?<a href="<?php echo $config["sub_url"]?>/register.php">Зарегистрироваться!</a></p>
</form>
<?php
if(isset($_POST['do_login'])) {
    $result = mysqli_num_rows($db_connect->query("SELECT * FROM users WHERE username = '$_POST[login]'"));
    if($result == 0) {
        echo "Такого пользователя не существует";
    }else if($_POST['login'] == '' AND $_POST['password'] == ''){
        echo "Поля должны быть заполнены!";
    }
    else{
        $result = $db_connect->query("SELECT * FROM users WHERE username='$_POST[login]' AND password='$_POST[password]'");
        if (mysqli_num_rows($result) == 0) {
            echo "Учетная запись не найдена!";
        }else{
            echo "Вы вошли!"; 
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
        }
    }
}
?>