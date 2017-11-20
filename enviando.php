<?php

  $texto = $_POST['texto'];
  $destinatario  =$_POST['dest'];
  $arquivo = file("historico.txt");

  if(!empty($texto) && !empty($destinatario)){
    $n = count($arquivo);
    $data = date("d/m/y");
    $texto = " ".$texto;
    $hora = date("H:i");
    $arquivo[$n]=$data . "," . $hora . "," . trim($texto) . "," . trim($destinatario);
    $arquivo[$n + 1] = "\n";
    file_put_contents('historico.txt',implode($arquivo));
    header('location: corretor.php');
  }
  else{
    echo "<script>alert('Dados incompletos!'); window.location = 'corretor.php'</script>";
  }

?>
