<?php
	session_start();

	include ("conecta.php");			

	if(isset($_POST['cadastrar'])){ 

		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$codigo = $_POST['codigo'];


			$sqlEmail = "SELECT * FROM perfil WHERE email='$email'"; 
		    $queryEmail = mysql_num_rows($sqlEmail);
		

		    if($queryEmail >= 1){
				$_SESSION['cadastroErro'] = "Ops, este e-mail já está em uso! Tente novamente.";
				header("location: cadastro_credenciamento.php");
			}
			else{
				$sql = "insert into perfil (email, senha, codigo) values ('" . $email . "', '" . $senha . "', '" . $codigo . "')";	        
			    $query = mysql_query($sql, $conexao);
		
				$_SESSION['emailLogin'] = $email;
				$_SESSION['senhaLogin'] = $senha;   
				header("location: cadastro_filtragem.php");
			}	
		    
	}
?>

