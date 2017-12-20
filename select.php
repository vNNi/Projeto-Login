<?php
include 'conecta.php';
$login=$_POST['login'];
$senha=$_POST['senha'];


$query=mysqli_query($conn,"select * from usuario where login='$login' and senha = md5('$senha')");
$quant=mysqli_num_rows($query);
echo $quant;

if($quant==1){
	
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['id_usuario'] = $linha['id_usuario'];
   header('location:sucesso.php'); 
}

$linha=mysqli_fetch_assoc($query);
 echo $linha['senha'];
?>