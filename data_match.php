<?php
    session_start();
    include_once ("conecta.php");

    //Preferência definida pelo usuário ao logar no app
    $prf = $_SESSION["preferencia"];

    //Esses dados vêm da tabela usuário e não da tabela online
    $genero = $_SESSION['generoLogin'];
    $nomeusuario = $_SESSION['nomeLogin'];

    /*Select na tabela online que tráz as preferências
      Se a minha preferência for igual o que a pessoa é, e a preferência da pessoa for o que eu Sou */
    $slpref = "SELECT * FROM online WHERE genero='$prf' AND preferencia='$genero' AND nome!='$nomeusuario'";
    //A partir daqui e pera obter as imagens que foram enviadas
    $query = mysql_query($slpref, $conexao);
    $imagem = $row['imagem'];
    $nomedesejado = $row['nome'];
    //$_SESSION['nomeDesejado'] = $nomedesejado;
    //$_SESSION['idadeLogin'] = $idade;

    foreach($imagem as $imagemN){

    }
    foreach($nomedesejado as $nomedesejadoN){
        $imagem = $row['imagem'];
        $_SESSION['nomeDesejado'] = $nomedesejado;
    }


    while($row = mysql_fetch_assoc($query)) {
      echo "<div class='formArea'>
              <form name='formMatch' action='validacao_solicitacao_match.php' method='post'>
                <div class='hideUser' style='width: 16px; height: 16px; background-color: yellow;'></div>
                <img src='user_images/".$imagem."' alt='Teste de exibição' style='width: 64px; height: 64px; border-radius: 50%;'/><br>
                <h5>{$nomedesejado}</h5>
                <input type='submit' value='❤' name='enviarMatch'  class='step-buttom' id='solicitarMatch'>
              </form>
            </div>
        ";

     }
?>
