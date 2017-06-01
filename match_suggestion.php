<?php
  session_start();
  include_once ("conecta.php");

  //Usuário atual que está usando app
  $nomeusuario = $_SESSION['nomeLogin'];
  echo $nomeusuario;

  //Encontrar na tabela, uma linha que o nome desejado seja o nome do usuário atual
  $resultMatch = mysql_query("SELECT nomeUsuario FROM match WHERE nomeDesejado='$nomeusuario' LIMIT 1");
  $dave = mysql_query($resultMatch) or die(mysql_error());

  $roww = $dave['nomeUsuario'];

  //  $sqlmatch = SELECT nomeUsuario FROM `match` WHERE nomeDesejado = 'Jorge e Matheus';
?>
