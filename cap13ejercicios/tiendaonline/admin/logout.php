<?php
include "../configs/config.php";
include "../configs/funciones.php";
session_destroy();
$_SESSION['id'] = NULL;
$_SESSION['username'] = NULL;
$_SESSION['password'] = NULL;
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['id']);

//session_destroy();
redir("index.php");
?>