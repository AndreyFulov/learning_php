<?php
$db_connect = new mysqli('localhost','root','','for_my_learning');
if(!$db_connect) {
    exit("Database connection error!");
}
?>