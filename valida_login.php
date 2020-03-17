<?php
session_start();
include('conexao.php');

if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['nome']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT id, nome FROM usuario where nome = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: paineldecontrole.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}

?>