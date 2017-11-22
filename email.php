<?php
  session_start();
  if ($_SESSION['logado']==FALSE) {
    echo "<script>alert('Usuário não logado!'); window.location = 'index.php'</script>";
    exit();
  }

  echo "Email enviado!";

  $to      = $_POST['dest'];
  $subject = 'the subject';
  $message = $_POST['texto'];
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'From: nicholas.aula@gmail.com' . "\r\n" .
    'Reply-To: '.$to . "\r\n";

  // ABAIXO ESTÁ O CODIGO DO QUE MANDA OS EMAILS PRO HISTORICO

  session_start();
  $texto = $_POST['texto'];
  $destinatario  =$_POST['dest'];

  $arquivo = file("historico.json");

  if(empty($arquivo)){
    $arquivo = array("admin"=>array(),"nick"=>array(),"wolf"=>array());
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

    $user = (string)$_SESSION['usuario'];
    array_push($arquivo[$user],$dados);


    file_put_contents('historico.json',json_encode($arquivo));
    header('location: corretor.php');
  }
  else{
    echo "<script>alert('Dados incompletos!'); window.location = 'corretor.php'</script>";
  }
 ?>
