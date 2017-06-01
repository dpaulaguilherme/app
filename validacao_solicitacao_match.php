<?php
  session_start();
  include_once ("conecta.php");

  //Preferência definida pelo usuário ao logar no app
  $prf = $_SESSION["preferencia"];

  //Esses dados vêm da tabela usuário e não da tabela online
  $genero = $_SESSION['generoLogin'];
  $nomeusuario = $_SESSION['nomeLogin'];

  if (isset($_POST['enviarMatch'])) {
    $sqlIII = "insert into match (nomeUsuario, nomeDesejado) values ('" . $nomeusuario . "', '" . $_SESSION['nomeDesejado'] . "')";
    $query = mysql_query($sqlIII, $conexao);
    echo $nomeusuario;
    echo $_SESSION['nomeDesejado'];
    //header("location: match_dashboard.php");
  }
?>
