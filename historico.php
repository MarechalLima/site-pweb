<?php
  $arquivo=file("historico.txt");
?>
<tablle>
  <body>
    <table style="border:1px solid black">
      <tr>
        <td> Dia </td>
        <td> Horário </td>
        <td> Mensagem </td>
        <td> Destinatário </td>
      </tr>
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
    </table>
    <a href="corretor.php"> Voltar </a>
  </body>
</table>
