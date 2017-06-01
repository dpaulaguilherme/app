<?php
	session_start();

	include("conecta.php");	

	$emailLogin = $_SESSION['emailLogin'];		

	$nome = $_POST['nome'];
	$estado = $_POST['uf'];
	$cidade = $_POST['cidade'];
	$tipores = $_POST['tipores'];	
	$espaco = $_POST['espaco'];
	$pontuacao = 2;
	$string = str_replace("/", "-", $_POST['nascimento']); 
	$dataBanco =  date("Y-m-d", strtotime($string));

	if (isset($_POST['finalizar'])) { 
		$sql = "UPDATE perfil SET 
			nome=			'$nome',
			estado=	 		'$estado', 
			cidade=	 		'$cidade',
			tipores=	 	'$tipores', 
			tamanho=	 	'$espaco', 
			pontuacao= 		'$pontuacao', 
			nascimento= 	'$dataBanco' 
			where email=	'$emailLogin'";

		$query = mysql_query($sql); 	

		$_SESSION["pontos"] = 2;

		header("location: dashboard.php");	
	}
?>