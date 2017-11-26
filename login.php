<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Autenticação</title>
  </head>
  <body>
    <?php

      $senha["admin"] = "admin";
      $senha["nick"] = "123";
      $senha["wolf"] = "abc";

      session_start();

      if((isset($_POST["login"]) && isset($_POST["senha"])) && (!empty($_POST["login"]) && !empty($_POST["senha"])) ) {
        $login = $_POST["login"];
        $pass = $_POST["senha"];
        if ($senha[$login] == $pass) {
          $_SESSION["logado"] = TRUE;
          $_SESSION['usuario'] = $login;
          header('location: corretor.php');
        }else {
          echo "<script>alert('Senha ou login incorreto(s)!'); window.location = 'index.php'</script>";
        }
      }else {
        echo "<script>alert('Dados incompletos!'); window.location = 'index.php'</script>";
      exit();
      }

    ?>
  </body>
</html>
