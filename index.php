<!DOCTYPE html>
<html>
  <head>
    <title> Editor de Texto </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/master.css">
  </head>
  <body>
    <?php
      include 'supmenu.php';
      session_start();

      if ($_SESSION['logado']==TRUE && isset($_SESSION["logado"]) && !empty($_SESSION["logado"])) {
        echo "<script>alert('Usuário já logado!'); window.location = 'corretor.php'</script>";
        exit();
      }
    ?>
    <form method="POST" action="login.php">
      <div id="formulario">
        <b>Usuário</b>
        <input type="text"  name="login" size="50" class="inputText"> <br>
        <b>Senha</b>
        <input type="password" name="senha" class="inputText" size="50">
        <input type="submit" value="Enviar" class="inputButton">
      </div>
    </form>
  </body>
</html>
