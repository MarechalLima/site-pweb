<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Autenticação</title>
    <script>
      function showToast(){
        Materialize.toast("Logout realizado!", 4000);
      }
    </script>
  </head>
  <body onload="showToast();">
    <?php
       include 'materialize.php';
      session_start();
      if ($_SESSION["logado"] == TRUE) {
        unset($_SESSION["logado"]);
        header('location: index.php?FromLogout=TRUE');//Retorna a variavel FromLogout
        //echo "<script>window.location = 'index.php'</script>";
        exit();
      }else {
        header('location: index.php?NotLoggedIn=TRUE');//Retorna a variavel NotLoggedIn
        
        //echo "<script>alert('Usuário não logado!'); window.location = 'index.php'</script>";
        exit();
      }
    ?>
  </body>
</html>
