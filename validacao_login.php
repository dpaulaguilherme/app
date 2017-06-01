<?php
	session_start();

	$emailL = $_POST ['emailLogin'];
	$senhaL = $_POST ['senhaLogin'];

	include_once ("conecta.php");

	$result = mysql_query("SELECT * FROM usuario WHERE email='$emailL' AND senha='$senhaL' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);

	$_SESSION['emailLogin'] 	 = $emailL;
	$emailLogin = $_SESSION['emailLogin'];
	$_SESSION['senhaLogin'] 	 = $senhaL;
	$_SESSION['nomeLogin']		 = $resultado['nome'];
	$_SESSION['generoLogin']	 = $resultado['genero'];
	$_SESSION['dataNascimento']  = ($resultado['nascimento']);

	$nascimento = $_SESSION['dataNascimento'];
	$date = new DateTime($nascimento);
	$interval = $date->diff( new DateTime( date('Y-m-d') ) );
	$idade = $interval->format( '%Y' );

	$sqlIdade = "UPDATE usuario SET idade='$idade' WHERE email='$emailLogin'";
	$queryIdade = mysql_query($sqlIdade);
	$_SESSION['idadeLogin'] = $queryIdade;

	if(empty($resultado)){
		$_SESSION['loginErro'] = "Ops, tem alguma coisa errada com seus dados. Tente novamente.";
		header("location: tela_login.php");
	}
	else{
		header("location: definir_preferencias.php");
	}
?>
