<?php

	session_start();

	unset($_SESSION['nome_usuario'], $_SESSION['email_usuario']);

	$_SESSION['msg'] = "Deslogado com sucesso";
	header("Location: login.php" );

?>