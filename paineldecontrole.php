<?php

include('verifica_login.php');

?>
<html lang="pt-br">
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

<h2>Olá, <?php echo $_SESSION['usuario']."!";?></h2>
<body>
<h2 class="form-signin-heading">Cadastrar produto no banco de dados</h2>
<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>   
<form method="POST" action="valida_prod.php" class="form-signin">
			
			<input type="text" name="nome" maxlength="50" class="form-control" class="inpt" placeholder="Digite o nome do produto" style="text-align: center"/><br>
			
			<input type="text" name="preco" maxlength="50" class="form-control" placeholder="Digite o preço do produto" style="text-align: center"/><br>
			
			<input type="text" name="quantidade" maxlength="50" class="form-control" placeholder="Digite a quantidade do produto" style="text-align: center"/><br>

			<input type="submit" class="btn btn-lg btn-danger btn-block" value="Inserir produto"><br><br>
</form>
<h2 class="form-signin-heading">Listar produtos do banco de dados</h2><br>
<form method="POST" action="consulta_asc.php" class="form-signin">
            <input type="submit" class="btn btn-lg btn-danger btn-block" value="Listar produtos em ord.crec.">
            </form>
<form method="POST" action="consulta_desc.php" class="form-signin">
            <input type="submit" class="btn btn-lg btn-danger btn-block" value="Listar produtos em ord.decr."><br><br>
            </form>            
<h4><a href="logout.php">Sair</a></h4>
</body>
</html>