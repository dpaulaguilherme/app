<?php
	session_start();
	//include_once('conecta.php');
?>

<!doctype html>
<html class="no-js" lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tuner - Main</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/app.css" />
  </head>
  <body>
		<div class="row">
			<div class="large-12 columns">
				<div class="tuner_logo"></div>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div class="main-text">
					Encontre pessoas e torne<br>a sua balada ainda mais<br>divertida!
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div class="main-purple-button">
					<a href="tela_login.php" target="_self" id="enter" class="afill-div">
						ACESSAR
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div class="main-white-button">
					<a href="criar_conta.php" target="_self" class="main-button" id="createAccount" class="bfill-div">
						CRIAR MINHA CONTA
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="main_graphic_element"></div>
		</div>
		<!-- Lista de Scripts -->
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>

		<!-- Scripts Embedados -->
    <script>
      $(document).foundation();

			$(function(){
				$('enter').on("click",function(e){
					 e.preventDefault();
					 var url = "tunerapp.esy.es/tela_login.php"
											window.open(url, '_self')
								});
			});
    </script>

		<!-- Script Facebook -->
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '1961424827423332',
		      xfbml      : true,
		      version    : 'v2.9'
		    });
		    FB.AppEvents.logPageView();
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
  </body>
</html>
