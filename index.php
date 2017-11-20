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
        echo "<script>alert('Usuário já logado!'); window.location = 'editor.php'</script>";
        exit();
      }
    ?>
    <form method="POST" action="login.php">
      <div id="formulario">
        <input type="text" placeholder="usuário" name="login" size="50" class="inputText"> <br>
        <input type="submit" value="Enviar" class="inputButton">
      </div>
    </form>
  </body>
</html>
