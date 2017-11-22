<?php

  session_start();
  $user=(string)$_SESSION['usuario'];

  $arquivo=file("historico.json");
  $arquivo = implode($arquivo);
  $arquivo = json_decode($arquivo,TRUE);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Histórico</title>
  </head>
  <body>
    <?php include 'supmenu.php' ?>

    <div class="container">
      <h4> Histórico de envios </h4>
      <ul class="collapsible popout" data-collapsible="accordion">

        <?php

          for($i=0;$i<count($arquivo[$user]);$i++){

            $dia = $arquivo[$user][$i]['data'];
            $hora = $arquivo[$user][$i]['hora'];
            $msg = $arquivo[$user][$i]['mensagem'];
            $dest = $arquivo[$user][$i]['destinatario'];

        ?>

        <li>
          <div class="collapsible-header" style="display: block">
            <i class="material-icons left">email</i>
            <div class="secondary-content"><?=$dia." às ". $hora?></div>
            <h5 style="display: inline">Título</h5> <br>
            <?="To: ".$dest?>


          </div>

          <div class="collapsible-body">
            <span><?=$msg?></span>
          </div>
        </li>


      <?php } ?>

      </ul>
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="corretor.php">
          <i class="material-icons">create</i>
        </a>
      </div>

    </div>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.collapsible').collapsible();
      });

    </script>

  </body>
</html>
