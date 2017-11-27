<?php
  $arquivo=file("historico.json");
  $aux=preg_split("/}/",$arquivo[0]);
  for($i=0;$i<count($aux)-1;$i++) {
    $aux[$i].='}';
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Histórico</title>

    <link rel="stylesheet" href="css/transicao/keyframes.css">
    <link rel="stylesheet" href="css/transicao/animation.scss">
  </head>
  <body> 
    <?php include 'supmenu.php' ?>

    <div class="container">
      <h4> Histórico de envios </h4>

      <div class="m-right-panel m-page scene_element scene_element--fadeinright">
      <ul class="collapsible popout" data-collapsible="accordion">

        <?php
          for($i=0;$i<count($aux)-1;$i++){
            $dados = json_decode($aux[$i]);

            $dia = $dados->data;
            $hora = $dados->hora;
            $msg = $dados->mensagem;
            $dest = $dados->destinatario;

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
    </div>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.collapsible').collapsible();
      });

    </script>

  </body>
</html>
