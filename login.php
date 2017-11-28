<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Autenticação</title>
  </head>
  <body>
    <?php


      session_start();


      $arquivo = file("cadastro.json");
      $arquivo = implode($arquivo);
      $arquivo = json_decode($arquivo,TRUE);
      $count = count($arquivo);
      $aux = false;

      if((isset($_POST["login"]) && isset($_POST["senha"])) && (!empty($_POST["login"]) && !empty($_POST["senha"])) ) {
        $login = $_POST["login"];
        $pass = $_POST["senha"];

        for($i = 0; $i < $count; $i++) {
          if ($arquivo[$i][$login] == $pass) {
            $_SESSION["logado"] = TRUE;
            $_SESSION["usuario"] = $login;
            header('location: historico.php');
            $aux = true;
            break;
          } else {
            $aux = false;
          }
        }

        if($aux == false) {
          header('location: index.php?IncorrectData=TRUE');          
          //echo "<script> alert('Dados incorretos!'); window.location = 'index.php' </script>";
        }
      }else {
        header('location: index.php?IncompleteData=TRUE');          
       //echo "<script>alert('Dados incompletos!'); window.location = 'index.php'</script>";
        exit();
      }
    ?>
  </body>
</html>
