<!DOCTYPE html>
<html>
  <head>
    <title> Corretor </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/master.css">
  </head>
  <body>
    <?php
      include 'supmenu.php';
      session_start();
      if ($_SESSION['logado']==TRUE) {
        echo "<script>alert('Usuário já logado!'); window.location = 'corretor.php'</script>";
        exit();
      }
    ?>
    <form method="POST" action="login.php">
      <div id="formulario">
        <input type="text" placeholder="usuário" name="login" size="50" style="display:block;margin:auto;"> <br>
        <input type="submit" value="Enviar" style="display:block;margin:auto;">
      </div>
    </form>
  </body>
</html>
