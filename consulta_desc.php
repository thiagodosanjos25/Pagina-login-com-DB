<html>
 <head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="thiago">
    <title>Painel de controle</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>   
</head>

<div class="form-signin">
<?php
// Conectando ao banco de dados: 
include_once("conexao.php");
// Criando tabela e cabeçalho de dados:
 echo "<table border=2>";
 echo "<tr>";
 echo "<th> CODIGO </th>";
 echo "<th> NOME </th>";
 echo "<th> PREÇO </th>";
 echo "<th> QUANTIDADE </th>";
 echo "</tr>";
  
 $sql = "SELECT * FROM produto order by preco desc";
 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $codigo = $registro['codigo'];
    $nome = $registro['nome'];
    $preco = $registro['preco'];
    $quantidade = $registro['quantidade_em_estoque'];
    echo "<tr>";
    echo "<td>".$codigo."</td>";
    echo "<td>".$nome."</td>";
    echo "<td>".$preco."</td>";
    echo "<td>".$quantidade."</td>";
    echo "</tr>";
 }
 mysqli_close($conn);
 echo "</table>";
 ?>
</div>
 <html>
 <h4><a href="paineldecontrole.php">Retornar ao painel de controle</a></h4>
 </html>