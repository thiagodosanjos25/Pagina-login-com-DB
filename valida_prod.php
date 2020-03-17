<?php
session_start();
$_SESSION['msg'] = $msg;
include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST,'preco', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST,'quantidade', FILTER_SANITIZE_EMAIL);


$result_produto = "INSERT INTO produto (nome, preco, quantidade_em_estoque) VALUES ('$nome','$preco','$quantidade')";
$resultado_produto = mysqli_query($conn, $result_produto);
	
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto cadastrado com sucesso</p>";
	header('location: paineldecontrole.php');
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto não foi cadastrado com sucesso</p>";
	header('location: paineldecontrole.php');
}
?>