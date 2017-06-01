<?php
	session_start();

	include("conecta.php");

	if (isset($_POST['criar_conta'])){

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$dia = $_POST['nascimento-dia'];
		$mes = $_POST['nascimento-mes'];
		$ano = $_POST['nascimento-ano'];
		$nascimento = $dia.'/'.$mes.'/'.$ano;
		$string = str_replace("/", "-", $nascimento);
		$dataBanco =  date("Y-m-d", strtotime($string));
		$genero = $_POST['genero'];

		$sqlEmail = "SELECT * FROM usuario WHERE email='$email'";
			$queryEmail = mysql_num_rows($sqlEmail);

		if($queryEmail >= 1){
			$_SESSION['cadastroErro'] = "Ops, este e-mail já está em uso! Tente novamente.";
			header("location: criar_conta.php");
		}
		else{
			$sql = "insert into usuario (nome, email, senha, nascimento, genero) values ('" . $nome . "', '" . $email . "', '" . $senha . "', '". $dataBanco ."', '". $genero ."')";
			$query = mysql_query($sql, $conexao);
			$_SESSION['emailLogin'] = $email;
			$_SESSION['senhaLogin'] = $senha;
			header("location: definir_preferencia.php");
		}
	}
?>
