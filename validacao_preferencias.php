<?php
	session_start();
	include_once ("conecta.php");

	$nomeL = $_SESSION['nomeLogin'];
	$generoL = $_SESSION['generoLogin'];

	$preferencia = implode(',', $_POST['genero']);
	$_SESSION["preferencia"] = $preferencia;
	$imagem = $_FILES["imagem"];
	$nomeFinal = time().'.jpg';
	$_UP['pasta'] = 'user_images/';

	if (move_uploaded_file($imagem['tmp_name'], $_UP['pasta'] . $nomeFinal)) {
			//Codigo para o insert da imagem
			$sqlII = "insert into online (nome, genero, preferencia, imagem) values ('" . $nomeL . "', '" . $generoL . "', '" . $preferencia . "', '" .  $nomeFinal . "')";
			$query = mysql_query($sqlII, $conexao);
			header("location: match_dashboard.php");
	}
	else {
	  	echo "Não foi possível completar esta ação, tente novamente";
	}
?>
