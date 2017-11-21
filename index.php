<!DOCTYPE html>
<html>
  <head>
    <title> Editor de Texto </title>
    <meta charset="utf-8">
    <link rel="icon" href="images/icon2.png">
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
      <div class="row">
        <div class="col s12">
          <h3 class="center-align">Login to Editop</h3>
          <form method="POST" action="login.php">
            <div class="row">
              <div class="input-field col s6 push-s3">
                <input id="last_name" type="text" name="login" class="validate">
                <label for="last_name">Login</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6 push-s3">
                <input id="password" type="password" name="senha" class="validate">
                <label for="password">Senha</label>
              </div>
            </div>
            <div class="row">
              <div class="col offset-s5">
                <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
