<?php
  session_start();

  $usuario = $_POST["usuario"];
  $senha = $_POST["senhacad"];
  $senhaconf = $_POST["senhacadconf"];

  $arquivo = file("cadastro.json");

  if(isset($usuario) && isset($senha) && isset($senhaconf)) {

    if($senha == $senhaconf) {
      $dados = array('usuario' => $usuario, 'senha' => $senha);
      $dados = (array) $dados;

      file_put_contents('cadastro.json',json_encode($arquivo));
      header('location: index.php');

      echo "<script> alert('Cadastrado! :-)'); window.location = 'index.php' </script>";
    } else {
      echo "<script> alert('Senhas diferentes!'); window.location = 'index.php' </script>";
    }

  } else {
    echo "<script> alert('Dados incompletos!'); window.location = 'index.php' </script>";
  }
?>
