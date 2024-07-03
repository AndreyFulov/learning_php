<?php
session_start();
include_once "config/config.php";
session_destroy();
header('Location: '.$config["sub_url"].'/');
?>