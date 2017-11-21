<?php

  $texto = $_POST['texto'];
  $destinatario  =$_POST['dest'];
  $arquivo = fopen("historico.json");

  if(!empty($texto) && !empty($destinatario)){
    $n = count($arquivo);

    $data = date("d/m/y");
    $hora = date("H:i");

    $arquivo[$n]=array("data"=>$data,"hora"=>$hora,"mensagem"=>$texto,"destinatario"=>$destinatario);
    $json_array = json_encode($arquivo);
    file_put_contents('historico.json',$json_array);
    header('location: corretor.php');
  }
  else{
    echo "<script>alert('Dados incompletos!'); window.location = 'corretor.php'</script>";
  }

?>
