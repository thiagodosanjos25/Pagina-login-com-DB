<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="thiago">
    <title>Cadastrar usuário no banco de dados</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>
</head>
<body>

		<div class="container">
		<h1 class="form-signin-heading">Cadastrar usuário no banco de dados</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>   
		
		<form method="POST" class="form-signin" action="valida_usu.php">
			
			<input type="text" name="nome" maxlength="50" class="form-control" class="inpt" placeholder="Digite o seu nome" style="text-align: center"/><br><br>
			
			<input type="text" name="senha" maxlength="50" class="form-control" placeholder="Digite a sua Senha" style="text-align: center"/><br>
			
			<input type="text" name="email" maxlength="50" class="form-control" placeholder="Digite o seu e-mail" style="text-align: center"/><br>

			<input type="submit" class="btn btn-lg btn-danger btn-block" value="Cadastrar usuário"><br><br>

			<a href="login.php">Tentar realizar login</a>
			
		</form>
	
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</div>
	<p class="text-center text-danger">
</body>
</html>
