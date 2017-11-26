<?php
  session_start();

  $usuario = $_POST["usuario"];
  $senha = $_POST["senhacad"];
  $senhaconf = $_POST["senhacadconf"];

  $arquivo = file("cadastro.json");

  if(empty($arquivo)){
    $arquivo = array();
    $arquivo = (array) $arquivo;
  }else{
    $arquivo = implode($arquivo);
    $arquivo = json_decode($arquivo,TRUE);
  }

  $count = count($arquivo);
  $aux1 = false;

  if(isset($usuario) && isset($senha) && isset($senhaconf)) {

    for($i = 0; $i < $count; $i++) {
      $teste1 = (string) key($arquivo[$i]);
      $teste2 = (string) $usuario;

      if(strtolower($teste1) == strtolower($teste2)) {
        $aux1 = true;
        break;
      } else {
        $aux1 = false;
      }
    }

    if($aux1 == true) {
       echo "<script> alert('Usuário já cadastrado!'); window.location = 'index.php' </script>";
    } else {
      if($senha == $senhaconf) {
        $dados = array($usuario => $senha);
        $dados = (array) $dados;

        array_push($arquivo, $dados);

        file_put_contents('cadastro.json', json_encode($arquivo));

        print_r($arquivo[0]);

        echo "<script> alert('Cadastrado! :-)'); window.location = 'index.php' </script>";

        header('location: index.php');
      } else {
        echo "<script> alert('Senhas diferentes!'); window.location = 'index.php' </script>";
      }
    }
  } else {
    echo "<script> alert('Dados incompletos!'); window.location = 'index.php' </script>";
  }
?>
