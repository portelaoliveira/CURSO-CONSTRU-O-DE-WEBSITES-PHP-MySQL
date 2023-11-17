<?php
	session_start();
?>

<!DOCTYPE html>

<head>

	<!-- Título da página -->
		<title>Validação</title>
		<!-- Required meta tags -->
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

	<!-- INSTRUÇÃO PHP PARA INSERÇÃO NO BANCO DE DADOS -->
	<?php

		require_once("conexao.php");
		$bancoDados = new db();
		$conect = $bancoDados -> conecta_mysql();

		// Captura das informações digitadas pelo usuário no formulário de registro
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		if((!empty($nome)) AND (!empty($email) ) AND (!empty($senha))) {


			// Inserção no banco de dados -> Criar o usuário
			$sql = "insert into usuarios (nome, email, senha) values ('$nome', '$email', '$senha')";

			mysqli_query($conect, $sql);

		}
		else {
			$_SESSION['msg'] = "Preencha todos os campos";
			header("Location: registro.php" );
		}

	?>

	<div id="principal" class="p-5">

		<h1>Cadastro realizado com sucesso!</h1>
		<a href="login.php" class="botao2 btn">Voltar</a>
		
	</div>
	
	<!-- Option 1: Bootstrap Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>