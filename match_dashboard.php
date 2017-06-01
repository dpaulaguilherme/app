<?php
    session_start();
    include_once ("conecta.php");
    $_SESSION['idade'];
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
      //echo json_encode($json);
    ?>
    <!--Scrips -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<script src="js/my_sript.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          setInterval(function() {
            $('#show').load('data_match.php')
          },30);
      });
    </script>

  </body>
</html>
