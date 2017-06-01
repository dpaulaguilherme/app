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
    <link rel="stylesheet" href="css/style.css" />
  </head>
	<div class="row white-top-bar">
		<div class="large-12 columns">
			<div class="login-title">
				CRIE A SUA CONTA
			</div>
		</div>
	</div>
  <body>
			<div class="row white-top-bar">
				<div class="large-1 columns">
						<div class="left-arrow">
						</div>
				</div>
				<div class="large-11 columns">
						<div class="center-symbol">
						</div>
				</div>
		</div>
		<div class="row">
			<div class="large-12 columns frmlogin">
			  <form name="formlogin" action="validacao_login.php" method="post">
			    <div class="label-form">EMAIL</div>
			    <input type="email" name="emailLogin" required autofocus><br/>
			    <h6>SENHA</h5>
			    <input type="password" name="senhaLogin" id="password" required="required" autofocus>
			    <div class="reveal lessReveal" id="showPassword" value="show"></div>
					<h5 class="h500 margin-20">
						<?php
							if(isset ($_SESSION['loginErro'])){
								echo $_SESSION['loginErro'];
								unset ($_SESSION ['loginErro']);
							}
						?>
					</h5>

					<div class="row">
						<div class="large-12 columns">
							<div class="main-purple-button">
								<input name="entrar" type="submit" value="Entrar" id="finalizarValidar" class="step-buttom" onClick="checkInfo()">
							</div>
						</div>
					</div>
			  </form>
			</div>
		</div>

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

  </body>
</html>
