<!DOCTYPE html>
<html>
  <head>
    <title> Editor de Texto </title>
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/login.css">
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
  </body>
</html>
