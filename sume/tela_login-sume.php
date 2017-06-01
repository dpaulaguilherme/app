<?php 
	session_start();
	include("conecta.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sumé</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Login</title>

	<!-- CSS Links -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/1140.css">	
</head>
	<body bgcolor="#30b4c6" class="general-flower-login">	    
	<div class="container-full" id="white-menu">
		<header>
			<div class="row nav-top">
				<div class="container12">
					<div class="row">
						<div class="column3" id="logo-menu">
							<img src="http://sume.esy.es/images/logo-sume-3x.png" alt="Sumé"/>	
						</div>
						<div class="column9">	
							<div class="menu-buttom" id="menu">
								Menu
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div class="menu-area" id="green-menu">
		<div class="container-full">
			<header>
				<div class="row nav-top" id="nav-top-green">
					<div class="container12">
						<div class="row">
							<div class="column3" id="logo-menu">
								<img src="http://sume.esy.es/images/logo-sume-white-3x.png" id="logo-menu-img" alt="Sumé"/>	
							</div>
							<div class="column9">	
								<div class="menu-buttom" id="menu-white">
									Fechar
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>		
		<div class="container12">
			<div class="row line-menu">
				<div class="colum1">
					<div class="ico-acessar"></div>
				</div>	
				<div class="column10">
					<a href="http://sume.esy.es/tela_login.php" class="text-menu">
						<h4 class="h500" id="acessar-margin">Entrar</h4>
					</a>
				</div>
			</div>
		</div>
		<div class="container12">
			<div class="row line-menuB">
				<div class="colum1">
					<div class="ico-criar"></div>
				</div>	
				<div class="column10">
					<a href="http://sume.esy.es/cadastro_credenciamento.php" class="text-menu">
						<h4 class="h500" id="criar-margin">Criar minha conta</h4>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="margin-16 container12">
	<div class="row margin-30"></div> 
    	<div class="row"> 		
       		<h3>Bem vindo seguidor de Sumé!</h3>	
    	</div>
        <div class="row margin-30">
        	<div class="col-2"></div>
	        <div class="col-8">
				<div class="row container12">
					<form name="formlogin" action="validacao_login.php" method="post">
						<div id="campoEmail">				            
							<h5>Email:</h5>	
							<div class="margin-10"></div> 
							<input type="email" name="emailLogin" required autofocus><br/>        
				        </div>
						<div class="row margin-20">
						<div id="campoSenha">
							<h5>Senha:</h5>
							<div class="margin-10"></div>
							<input type="password" name="senhaLogin" id="password" required="required" autofocus>
							<div class="reveal lessReveal" id="showPassword" value="show"></div> 
						</div>
						<h5 class="h500 margin-20">
							<?php
								if(isset ($_SESSION['loginErro'])){
									echo $_SESSION['loginErro'];
									unset ($_SESSION ['loginErro']);
								}
							?>
						</h5>
						<div class="row margin-72">	
							<input name="entrar" type="submit" value="Entrar" id="finalizarValidar" class="step-buttom" onClick="checkInfo()">
						</div>
					</form>
				</div>
			</div>
		</div> 
	</div>	
	<div class="margin-20"></div>
	<div class="container12">							
		<div class="row" style="text-align: center !important; letter-spacing: 0.05em; text-decoration: underline;">
			<a href="http://sume.esy.es/cadastro_credenciamento.php">
				Ainda não tenho uma conta
			</a>
		</div>
	</div>
	</body>
	<!-- Scripts embedados JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
		  $('#showPassword').on('click', function(){
		    
		    var passwordField = $('#password');
		    var passwordFieldType = passwordField.attr('type');
		    if(passwordFieldType == 'password')
		    {
				$("#showPassword").removeClass("lessReveal").addClass("moreReveal");
		        passwordField.attr('type', 'text');
		        $(this).val('Hide');
		    } else {
				$("#showPassword").removeClass("moreReveal").addClass("lessReveal");
		        passwordField.attr('type', 'password');
		        $(this).val('Show');
		    }
		  });
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
		  $('#showPassword').on('click', function(){
		    
		    var passwordField = $('#senha');
		    var passwordFieldType = passwordField.attr('type');
		    if(passwordFieldType == 'password')
		    {
				$("#showPassword").removeClass("lessReveal").addClass("moreReveal");
		        passwordField.attr('type', 'text');
		        $(this).val('Hide');
		    } else {
				$("#showPassword").removeClass("moreReveal").addClass("lessReveal");
		        passwordField.attr('type', 'password');
		        $(this).val('Show');
		    }
		  });
		});

		$("#green-menu").hide();

		$('#menu').on('click', function(){
			$("#green-menu").show();
			$("#white-menu").hide();
		});
		$('#menu-white').on('click', function(){
			$("#white-menu").show();
			$("#green-menu").hide();
		});
	</script>	
</html>