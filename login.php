<?php
	session_start();
	?>
<html lang="pt-br">
<head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="thiago">
    <title>Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>
</head>
</head>
<body>
<?php
		
	if (isset($_SESSION["erro"]) ){
		if($_SESSION["erro"] == 1){
			echo 'Senha invalida.';
		}elseif($_SESSION["erro"] == 2){
			echo 'Usuário não encontrado!';
		}
	}
?>
<div class="container">
		<h1 class="form-signin-heading">Acesso ao usuário</h1>
		<form method="POST" class="form-signin" action="valida_login.php">
			<input type="text" name="nome"  class="form-control" placeholder="Usuário" autocomplete="off"  style="text-align: center"/><br><br>
			<input type="password" name="senha" class="form-control" placeholder="Senha"  style="text-align: center"/><br><br>
			<input type="submit" value="Acessar" class="btn btn-lg btn-danger btn-block" name="submit"><br><br>
		</form>
		</div>
		<p class="text-center text-danger">
		<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}?>
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	
</body>
</html>
