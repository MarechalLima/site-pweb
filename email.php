<?php
  session_start();
  if ($_SESSION['logado']==FALSE) {
  echo "<script>alert('Usuário não logado!'); window.location = 'index.php'</script>";
  exit();
  }

  echo "Email enviado!";

  $subject = 'Email suspeito';
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'From: nicholas.aula@gmail.com' . "\r\n";

  $texto = $_POST['texto'];
  $destinatario  =$_POST['dest'];

  $arquivo = file("historico.json");
  $aux=preg_split("/}/",$arquivo[0]);
  for($i=0;$i<count($aux)-1;$i++) {
    $aux[$i].='}';
  }
  if(!empty($texto) && !empty($destinatario)){
    mail($destinatario, $subject, $texto, $headers);

    $data = date("d/m/y");
    $hora = date("H:i");

    $dados=array("data"=>$data,"hora"=>$hora,"mensagem"=>$texto,"destinatario"=>$destinatario);

    $arquivo = Null;

    for($i=0;$i<count($aux)-1;$i++) {
      $arquivo[$i] = $aux[$i];
    }
    array_push($arquivo,json_encode($dados));
    file_put_contents('historico.json',$arquivo);
    header('location: corretor.php');
  }
  else{
    echo "<script>alert('Dados incompletos!'); window.location = 'corretor.php'</script>";
  }

?>
