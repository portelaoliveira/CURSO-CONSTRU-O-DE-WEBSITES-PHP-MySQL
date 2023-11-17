<?php

	session_start();
	
	if (!empty($_SESSION['nome_usuario'])) {

		echo "Bem vindo " . $_SESSION['nome_usuario'] . "<br>";	

		echo "<a href='sair.php'>Sair</a>";

	}
	else {
		$_SESSION['msg'] = "Faça Login";
		header("Location: login.php" );
	}

?>