<?php
  session_start();
  if ($_SESSION['logado']==FALSE) {
    echo "<script>alert('Usuário não logado!'); window.location = 'index.php'</script>";
    exit();
  }

  echo "Email enviado!";

  $to      = 'nicholas.aula@gmail.com';
  $subject = 'the subject';
  $message = 'hello';
  $headers = 'From: nicholas.aula@gmail.com' . "\r\n" .
    'Reply-To: nicholas.aula@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $message, $headers);
 ?>
