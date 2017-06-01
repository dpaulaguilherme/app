<?php
  session_start();
  include_once ("conecta.php");

  $prf = $_SESSION["preferencias"];

  //A partir daqui e pera obter as imagens que foram enviadas
  $slpref = "SELECT * FROM online WHERE preferencia='$prf'";
  $query = mysql_query($slpref, $conexao);

  while($row = mysql_fetch_assoc($query)) {
    $imagem = $row['imagem'];

    $json[] = "<img src=\"data_match\$imagem\" />";
  }
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
    <div id="show"></div>
    <?php
      echo json_encode($json);
    ?>

    <!--Scrips -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        setInterval(function () {
          $('#show').load("data_match.php"),
        }, 3000);
      });
    </script>
  </body>
</html>
