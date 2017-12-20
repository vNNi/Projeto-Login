<?php
include 'conecta.php';
$loginUsuario=isset($_POST['loginUsuario'])?$_POST['loginUsuario']:"";
$senhaUsuario=isset($_POST['senhaUsuario'])?$_POST['senhaUsuario']:"";

$query_select = "SELECT login FROM usuario WHERE login = '$loginUsuario'";
$select = mysqli_query($conn,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];
if($loginUsuario== "" || $loginUsuario== null){
	echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='formcadastro.html';</script>";
}else if($logarray==$loginUsuario){
	echo"<script language='javascript' type='text/javascript'>alert('O Usuário digitado já existe');window.location.href='formcadastro.html';</script>";
	die();
}else{
	$query="insert into usuario (login,senha,data) values ('$loginUsuario',md5('$senhaUsuario'),now())";
	$insert=mysqli_query($conn,$query);
	
}
	if($insert){
		echo "<script language='javascript' type='text/javascript'>alert('Cadastro feito com sucesso!');window.location.href='formulario.html';</script>";
	}else{
		"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar o usuário.');window.location.href='formcadastro.html';</script>";
	}
mysqli_close($conn);


?>
<?php
/*include 'conecta.php';
$login=$_POST['loginUsuario'];
$senha=$_POST['senhaUsuario'];
$sql="insert into usuario (login, senha, data) 
      values ('$login', md5('$senha'),now());";
$res = mysqli_query($conn, $sql);
if($res){
  echo "<br>SQL executado com sucesso! - INSERT";
  }
else{
  echo mysqli_error($conn);
}
mysqli_close($conn);*/
?>
