<?php
	session_start();
	//include("conecta.php");
?>

<!doctype html>
<html class="no-js" lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tuner - Main</title>
		<link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
		<div class="row">
			<div class="tuner-logo"></div>
		</div>
		<form name="frmCadastro" action="validacao_cadastro.php" method="post">
			<h5>NOME</h5>
				<input type="text" name="nome" id="nome" /><br>
			<h5>EMAIL</h5>
				<input type="text" name="email" id="email" /><br>
			<h5>SENHA</h5>
				<input type="password" name="senha" id="senha" required="required" /><br>
			<h5>DATA DE NASCIMENTO</h5>
				<input type="text" name="nascimento-dia" id="nascimento-dia"/>
				<input type="text" name="nascimento-mes" id="nascimento-mes"/>
				<input type="text" name="nascimento-ano" id="nascimento-ano"/><br>
			<h5>GÊNERO</h5>
			<select name="genero">
				<option value="m">Mulher</option>
				<option value="mt">Mulher trans</option>
				<option value="h">Homem</option>
				<option value="ht">Homem trans</option>
				<option value="nb">Não-binário</option>
			</select><br>
			<input type="submit" value="CRIAR CONTA" name="criar_conta">
		</form>
	<!-- Lista de Scripts -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/what-input.min.js"></script>
	<script src="js/foundation.min.js"></script>

  </body>
  </html>
