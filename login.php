<?php
$conn=mysqli_connect("localhost","root","","cadastro");
$c=mysqli_errno($conn);
if($c){
	echo "Erro ao conectar no banco".mysqli_error($conn);
}
$login=$_POST['login'];
$senha=$_POST['senha'];
$enviar=$_POST['enviar'];
if(isset($enviar)){
	$verifica = mysqli_query($conn,"SELECT * FROM usuario WHERE login = '$login' && senha = md5('$senha')");
	$quant=mysqli_num_rows($verifica);
	
		if($quant==1){
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			echo"<script language='javascript' type='text/javascript'>alert('logado com sucesso!');window.location.href='sucesso.php';</script>";}
			/*$linha=mysqli_fetch_assoc($verifica);
			session_start();
			$_SESSION['login'] = $linha['login'];
			$_SESSION['id_usuario'] = $linha['id_usuario'];
			header('location:sucesso.php');*/		
	else{
		echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='formcadastro.html';</script>";
          die();
	}
}
?>

