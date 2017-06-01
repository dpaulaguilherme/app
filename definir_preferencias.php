<?php
	session_start();
	include("conecta.php");
?>

<!doctype html>
<html class="no-js" lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tuner - Main</title>
    <link rel="stylesheet" href="css/foundation.css" />
  </head>
  <body>
    <form name="frmpreferencias" action="validacao_preferencias.php" method="post" enctype="multipart/form-data">
      <h5>VOCÊ SENTE ATRAÇÃO POR:</h5><br>
      <input type="checkbox" name="genero[]" value="m"> Mulher<br>
      <input type="checkbox" name="genero[]" value="mt"> Mulher Trans<br>
      <input type="checkbox" name="genero[]" value="h"> Homem<br>
      <input type="checkbox" name="genero[]" value="ht"> Homem Trans<br>
      <input type="checkbox" name="genero[]" value="nb"> Não-binário<br><br>
      <h5>FOTO DO PERFIL<h5><br>
      <input type="file" name="imagem" />
      <input type="submit" name="validar_preferencias" value="PROSSEGUIR" id="validarPreferencias" />
    </form>
  </body>
  </html>
