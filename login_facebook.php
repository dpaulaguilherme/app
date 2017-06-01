<?php

<!doctype html>
<html class="no-js" lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tuner - Login/Facebook</title>
    <link rel="stylesheet" href="css/foundation.css" />
  </head>
  <body>

  /* Inicialização do Plugin */
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '1961326840766464',
        cookie     : true,
        xfbml      : true,
        version    : 'v2.8'
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

    /* Verificação de status */
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });

    /*Callback */
    {
        status: 'connected',
        authResponse: {
            accessToken: '...',
            expiresIn:'...',
            signedRequest:'...',
            userID:'...'
        }
    }
  </script>

  </body>
</html>

?>
