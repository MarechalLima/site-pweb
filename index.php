<!DOCTYPE html>
<html>
  <head>
    <title> Editor de Texto </title>
    <meta charset="utf-8">
    <link rel="icon" href="images/icon2.png">
    <link rel="stylesheet" href="css/login.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>
  <body>
    <?php
      session_start();

      if (isset($_SESSION["logado"]) && !empty($_SESSION["logado"])) {
        if ($_SESSION['logado']==TRUE) {
          echo "<script>alert('Usuário já logado!'); window.location = 'corretor.php'</script>";
          exit();
        }
      }

    ?>
    <div class="container">
      <h3 class="center-align">Bem vindo ao Editop</h3>
      <div class="row">
        <div class="col s12">
          <img src="images/icon.png" alt="icon">
        </div>
      </div>
      <div class="row">
        <div class="col s12 m6">
          <div class="card push-s3 z-depth-5 grey lighten-2">
            <div class="card-content">
              <div class="row">
              <div class="col s12">
                <br>
                <span class="card-title">Login to Editop</span>
                <form method="POST" action="login.php">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="last_name" type="text" name="login" class="validate">
                      <label for="last_name">Login</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" type="password" name="senha" class="validate">
                      <label for="password">Senha</label>
                    </div>
                  </div>
                      <div class="col">
                        <button class="btn waves-effect waves-light light-blue lighten-1" type="submit" name="action">Entrar
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                  </form>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>




    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
