<?php

	session_start();

	include_once('conexao.php');

	$btnlogin = filter_input(INPUT_POST, 'btnlogin', FILTER_SANITIZE_STRING);
	
	if ($btnlogin) {
		echo "Ok";
	}
	else {
		$_SESSION['msg'] = "Página não encontrada!";
		header("Location: login.php" );
	}

	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

	if((!empty($email)) AND (!empty($senha))) {
		$result = "SELECT ID, nome, email, senha from usuarios where email = '$email' LIMIT 1";
		$result_usuario = mysqli_query($conection, $result);

		if ($result_usuario) {
			$row_usuario = mysqli_fetch_assoc($result_usuario);

			if ($senha == $row_usuario['senha']) {
				$_SESSION['nome_usuario'] = $row_usuario['nome'];
				$_SESSION['email_usuario'] = $row_usuario['emails'];
				header("Location: restrita.php" );
			}
			else {
				$_SESSION['msg'] = "Login e senhas incorretos";
				header("Location: login.php" );
			}

		}
		else {

		}
	}
	else {
		$_SESSION['msg'] = "Preencha todos os campos!";
		header("Location: login.php" );
	}

?>