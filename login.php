<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Autenticação</title>
  </head>
  <body>
    <?php
      $pessoas[0]['login'] = "admin";
      $pessoas[1]['login'] = "nick";
      $pessoas[2]['login'] = "wolf";
      session_start();
      foreach ($pessoas as $key) {
        if (isset($_POST["login"]) && !empty($_POST["login"])){
            if ($_POST["login"] == $key['login']) {
              $_SESSION["logado"] = TRUE;
              header('location: corretor.php');
              exit();
            }else {
              echo "<script>alert('Dados incorretos!'); window.location = 'index.php'</script>";
              exit();
            }
          }else {
          echo "<script>alert('Dados incompletos!'); window.location = 'index.php'</script>";
          exit();
          }
        }

    ?>
  </body>
</html>
