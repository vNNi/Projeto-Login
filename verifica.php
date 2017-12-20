<?php
session_start();

if(!isset($_SESSION['login']) || !isset($_SESSION['senha'])){
	session_destroy();
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	unset($_SESSION['time']);
	$_SESSION=array();
	header('location:formulario.html');
}
?>
