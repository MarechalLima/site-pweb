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

  if(!empty($message) && !empty($to)){
    mail($to, $subject, $message, $headers);

    $arquivo = file("historico.txt");

    $n = count($arquivo);
    $data = date("d/m/y");
    $message = " ".$message;
    $hora = date("H:i");
    $arquivo[$n]=$data . "," . $hora . "," . trim($message) . "," . trim($to);
    $arquivo[$n + 1] = "\n";
    file_put_contents('historico.txt',implode($arquivo));
    header('location: corretor.php');
  }
  else{
    echo "<script>alert('Dados incompletos!'); window.location = 'corretor.php'</script>";
  }
 ?>
