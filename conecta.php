<?php
$conn=mysqli_connect("localhost","root","","cadastro");
if(mysqli_connect_errno($conn)){
	echo "Erro ao conectar ao banco". mysqli_connect_error;
}else
?>