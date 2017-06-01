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
  <body>
  <form name="formlogin" action="validacao_login.php" method="post">
    <h5>E-MAIL</h5>
    <input type="email" name="emailLogin" required autofocus><br/>
    <h5>SENHA</h5>
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
		<input name="entrar" type="submit" value="Entrar" id="finalizarValidar" class="step-buttom" onClick="checkInfo()">
  </form>

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
