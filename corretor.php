<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/master.css">
  </head>
  <body>
<<<<<<< Updated upstream
    <?php include 'supmenu.php';
    session_start();
    if ($_SESSION['logado']==FALSE) {
      echo "<script>alert('Usuário não logado!'); window.location = 'index.php'</script>";
      exit();
    }
    ?>
=======
<<<<<<< Updated upstream


=======
    
    <form method="post" action="enviando.php">
    Texto:<textarea cols="20" rows="20" name="texto">

    </textarea>
    Destinatario:<input type="email" name="dest">
    <input type="submit" name="enviar" value="enviar">
>>>>>>> Stashed changes

  <br>
  <br>
  <a href="historico.php"> Historico </a>
>>>>>>> Stashed changes
  </body>
</html>
