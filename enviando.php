<?php

  $texto = $_POST['texto'];
  $destinatario  =$_POST['dest'];

  $arquivo = file("historico.json");

  if(empty($arquivo)){
    $arquivo = array("dados"=>array());
    $arquivo = (array) $arquivo;
  }else{
    $arquivo = implode($arquivo);
    $arquivo = json_decode($arquivo,TRUE);
  }

  if(!empty($texto) && !empty($destinatario)){
    $data = date("d/m/y");
    $hora = date("H:i");

    $dados=array("data"=>$data,"hora"=>$hora,"mensagem"=>$texto,"destinatario"=>$destinatario);
    $dados = (array) $dados;

    array_push($arquivo['dados'],$dados);

    file_put_contents('historico.json',json_encode($arquivo));
    header('location: corretor.php');
  }
  else{
    echo "<script>alert('Dados incompletos!'); window.location = 'corretor.php'</script>";
  }
  // CODIGO "INUTIL", FIZ UMA COPIA DISSO PARA O EMAIL.PHP
?>
