<?php
include_once "inc/header.php";
include "inc/connect.php";
?>

<form action="register.php" method="post">
    <label>Логин</label><input type="text" name="login"><br>
    <label>Пароль</label><input type="password" name="password"><br>
    <input type="submit" value="Войти" name="do_register">
    <br>
    <p>Есть аккаунт?<a href="<?php echo $config["sub_url"]?>/login.php">Войти!</a></p>
</form>
<?php
if($_POST['do_register']) {
    $result = mysqli_num_rows($db_connect->query("SELECT * FROM users WHERE username = '$_POST[login]'"));
    if($result >= 1) {
        echo "Логин уже занят";
    }else if($_POST['login'] == '' AND $_POST['password'] == ''){
        echo "Поля должны быть заполнены!";
    }else{
        $result = $db_connect->query("INSERT users(username,password) VALUES('$_POST[login]','$_POST[password]');");
        echo "OK!";
    }
}
?>