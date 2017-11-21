<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/master.css">
  </head>
  <body>
    <?php include 'supmenu.php';
    session_start();
    if ($_SESSION['logado']==FALSE) {
      echo "<script>alert('Usuário não logado!'); window.location = 'index.php'</script>";
      exit();
    }
    ?>

    <div class="container">
      <form method="post" action="email.php" class="col s12">


      <div class="row">
        <div class="input-field col s12">
          <textarea id="texto-email" class="materialize-textarea" name="texto"></textarea>
          <label for="texto-email">Texto</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="dest" class="validate">
          <label for="email" data-error="Email inválido" data-success="Email válido">Email</label>
        </div>
      </div>


      <button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar
        <i class="material-icons right">send</i>
      </button>
      <a href="historico.php"  class="btn waves-effect waves-light orange"><i class="material-icons left">history</i> Ver histórico </a>
    </div>


  </body>
</html>
