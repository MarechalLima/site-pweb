<?php
  $arquivo=file("historico.txt");
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

      <div class="row">
        <h4>Histórico de envios</h4>
      </div>

      <div class="row">
        <table class="bordered striped">
          <thead>
            <tr>
              <th> Dia </td>
              <th> Horário </td>
              <th> Mensagem </td>
              <th> Destinatário </td>
            </tr>
          </thead>

          <tbody>

          <?php
            for($i=0;$i<count($arquivo);$i++){
              $dados = preg_split("/,/",$arquivo[$i]);
          ?>
            <tr>
              <td> <?= $dados[0] ?> </td>
              <td> <?= $dados[1] ?> </td>
              <td> <?= $dados[2] ?> </td>
              <td> <?= $dados[3] ?> </td>
            </tr>
          <?php
            }
          ?>

          </tbody>
        </table>
      </div>

      <div class="row">
        <a class="btn waves-effect waves-light" href="corretor.php"> <i class="material-icons left">arrow_back</i> Voltar </a>
      </div>


    </div>

  </body>
</html>
