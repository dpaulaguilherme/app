<?php
	session_start();

	$emailL = $_POST ['emailLogin'];
	$senhaL = $_POST ['senhaLogin'];

	include_once ("conecta.php");

	$result = mysql_query("SELECT * FROM usuario WHERE email='$emailL' AND senha='$senhaL' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);

	$_SESSION['emailLogin'] 	 = $emailL;
	$_SESSION['senhaLogin'] 	 = $senhaL;
	$_SESSION['nomeLogin']		 = $resultado['nome'];
	$_SESSION['generoLogin']	 = $resultado['genero'];
	$_SESSION['dataNascimento']  = ($resultado['nascimento']);

	$nascimento = $_SESSION['dataNascimento'];

	$resultIdade = mysql_query("SELECT * FROM usuario TIMESTAMPDIFF (YEAR,'$nascimento', CURDATE()) LIMIT 1");
	$resultadoIdade = mysql_fetch_assoc($resultIdade);
	$_SESSION['idade'] = $resultadoIdade;

	$sqlIdade = "UPDATE usuario, SET idade='$resultadoIdade',";
	$queryIdade = mysql_query($sqlIdade);


	if(empty($resultado)){
		//Mensagem de Erro
		$_SESSION['loginErro'] = "Ops, tem alguma coisa errada com seus dados. Tente novamente.";

		//Fazer com que o usuário fique na tela de login
		header("location: tela_login.php");
	}
	else{
		header("location: definir_preferencias.php");
	}
?>
