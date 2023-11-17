<?php
	session_start();
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Estilos CSS -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<!-- Normalize CSS -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Links de Ícones -->
	<script src="https://kit.fontawesome.com/6af5e0be81.js" crossorigin="anonymous"></script>
	<!-- HTML5 hiv -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>

<body>

	<div id="principal">
		<img src="img/perfil.png" id="foto-perfil">

		<?php
			if(isset($_SESSION['msg'])){
				echo "<br>" . $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			
		?>

		<form method="post" action="valida-login.php">

			<div>
				<input type="text" name="email" id="email" class="usuario" placeholder="Digite o seu e-mail" >
			</div>	

			<div>
				<input type="password" name="senha" id="senha" placeholder="Digite a sua senha" class="caixa">
			</div>

			<div>
				<input type="submit" name="btnlogin" value="Login" class="botao">
			</div>

		</form>

		<form action="registro.php">

			<input type="submit" value="Inscreva-se" class="botao2">

		</form>

	</div>

	<!-- Option 1: Bootstrap Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>