<?php
session_start();
$_SESSION['msg'] = $msg;
include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$senha = md5($senha);

$result_usuario = "INSERT INTO usuario (nome, senha, email) values ('$nome','$senha','$email')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
	
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header('location: cadastra_usu.php');
}else{
	$_SESSION['msg'] = "<p style=':red;'>Usuário não foi cadastrado com sucesso</p>";
	header('location: cadastra_usu.php');
}
?>