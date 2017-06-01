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
	<title>Cadastre-se no Sumé</title>

	<!-- CSS Links -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/1140.css">
</head>
	<body bgcolor="#001849">
	<div class="container-full" id="white-menu">
		<header>
			<div class="row nav-top">
				<div class="container12">
					<div class="row">
						<div class="column3" id="logo-menu">
							<img src="http://sume.esy.es/images/logo-sume-3x.png" id="logo-menu-img" alt="Sumé"/>	
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
	<div class="row margin-15"></div> 
    	<div class="row"> 		
	       		<h3>Comece criando a <br/>sua conta!</h3>
    	</div>
	    <div class="row">
	        <div class="col-2"></div>
	        <div class="col-8">
				<div class="row container12">
					<form name="formcrd" action="validacao_cadastro.php" method="post">	
							<div class="row margin-20">  
								<div class="container12">          
									<h5>Email</h5>						
									<div class="margin-10"></div> 
									<input type="text" name="email" id="email" onblur="java script: envia('receber.php', 'POST', false);"><br/>						<h5 class="h500">								
										<div id='respostaExistente'></div>
									</h5>
								</div>								
							</div> 		
							<div class="row margin-20"> 
								<div class="container12">             
									<h5>Senha</h5>	
									<div class="margin-10"></div>
									<input type="password" name="senha" id="senha" required="required" onfocus="verificaSenha()" maxlength="8" autofocus> 
									</div>	
									<div class="reveal lessReveal" id="showPassword" value="show"></div> 
							</div> 	
							<div class="row margin-20"> 
								<h5>Código de doação <span style="font-weight: 500;">(Opcional)</span></h5>	
								<div class="margin-10"></div>					
								<input type="text" id="codigo" name="codigo" placeholder="Insira seu código"  readonly="true" onfocus="verificaCodigo()"><br/>
							</div>
							<div class="row margin-20">	
								<div class="column12">
										<input name="cadastrar" type="submit" value="Criar conta" class="step-buttom" id="finalizarValidar">
								</div>
							</div>
					</form>													
					<div class="row">							
						<div class="column12" style="text-align: center !important; letter-spacing: 0.05em; text-decoration: underline; display: inline; position: absolute; margin-top: -10px;">
							<a href="http://sume.esy.es/tela_login.php" class="link">
								Já possuo uma conta
							</a>							
							<h5 class="h500 margin-10" id="respostaExistente">
								<?php
									if(isset ($_SESSION['cadastroErro'])){
										echo $_SESSION['cadastroErro'];
										unset ($_SESSION ['cadastroErro']);
									}
								?>
							</h5>
						</div>
					</div>
				</div>
	        </div> 
	        <div class="col-2"></div>
	    </div>
	</div>
	</body>

	<!-- Scripts embedados JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	


	<!-- Validações -->
	<script type="text/javascript">
		var email 	= "#email";
		var senha 	= "#senha";
		var codigo	= "#codigo";

	    function verificaEmail(){
	        var exclude=/[^@-.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
	        var check=/@[w-]+./;
	        var checkend=/.[a-zA-Z]{2,3}$/;

	        if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){return false;}
	        else {return true;}
   			}
   		}
	</script>	
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
	<script language="javascript">
	    var email = $("#email"); 
	        email.blur(function() { 
	            $.ajax({ 
	                url: 'verificaEmail.php', 
	                type: 'POST', 
	                data:{"email" : email.val()}, 
	                success: function(data) { 
	                console.log(data); 
	                data = $.parseJSON(data); 
	                $("#respostaExistente").text(data.email);
	            } 
	        }); 
   		});
	</script>
</html>