<?php

  $texto = $_POST['texto'];
  $destinatario  =$_POST['dest'];
  $arquivo = file("historico.json");
  $aux=preg_split("/}/",$arquivo[0]);
  for($i=0;$i<count($aux)-1;$i++) {
    $aux[$i].='}';
  }
  if(!empty($texto) && !empty($destinatario)){
    $data = date("d/m/y");
    $hora = date("H:i");

    $dados=array("data"=>$data,"hora"=>$hora,"mensagem"=>$texto,"destinatario"=>$destinatario);

    $arquivo = Null;

    for($i=0;$i<count($aux)-1;$i++) {
      $arquivo[$i] = $aux[$i];
    }
    array_push($arquivo,json_encode($dados));
    echo(json_decode($arquivo[0])->data);
    file_put_contents('historico.json',$arquivo);
    header('location: corretor.php');
  }
  else{
    echo "<script>alert('Dados incompletos!'); window.location = 'corretor.php'</script>";
  }

?>
