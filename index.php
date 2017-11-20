<!DOCTYPE html>
<html>
  <head>
    <title> Editor de Texto </title>
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/login.css">

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
    <form method="POST" action="login.php">
      <h1>Login to Editop</h1>
      <img src="images/icon.png" alt="icon">
      <div id="formulario">
        <b>Usuário</b>
        <input type="text"  name="login" class="inputText">
        <b>Senha</b>
        <input type="password" name="senha" class="inputText">
        <input type="submit" value="Enviar" class="inputButton">
      </div>
    </form>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
