<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['senha']);
$_SESSION=array();
session_destroy();
header('location:formulario.html');
?>