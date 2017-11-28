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

  if(isset($usuario) && isset($senha) && isset($senhaconf) && (!empty($usuario)) && (!empty($senha)) && (!empty($senhaconf))) {

    if($senha == $senhaconf) {
      $dados = array($usuario => $senha);
      $dados = (array) $dados;

      array_push($arquivo, $dados);
      file_put_contents('cadastro.json',json_encode($arquivo));

      //print_r($arquivo[3]["Joao"]);

     // echo "<script> alert('Cadastrado! :-)'); window.location = 'index.php' </script>";

      header('location: index.php?SignUp=TRUE');

    } else {

      header('location: index.php?DifferentPasswords=TRUE');      
      //echo "<script> alert('Senhas diferentes!'); window.location = 'index.php' </script>";
    }

  } else {
    header('location: index.php?IncompleteData=TRUE');    
    //echo "<script> alert('Dados incompletos!'); window.location = 'index.php' </script>";
  }

?>
