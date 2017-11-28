<?php
  session_start();
  if ($_SESSION['logado']==FALSE) {
  header('location: index.php?NotLoggedIn=TRUE');
  //echo "<script>alert('Usuário não logado!'); window.location = 'index.php'</script>";
  exit();
  }

  $headers  = 'MIME-Version: 1.0' . PHP_EOL;
  $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
  $headers .= 'From: nicholas.aula@gmail.com' . PHP_EOL;


  $texto = $_POST['texto'];
  $destinatario  =$_POST['dest'];
  $titulo = $_POST['titulo'];
  if (!empty($texto) && !empty($destinatario) && !empty($titulo)) {
    mail($destinatario, $titulo, $texto, $headers);
  }

  // Codigo do historico a baixo

  $arquivo = file("historico.json");
  $arquivo = implode($arquivo);
  $arquivo = json_decode($arquivo,TRUE);

  $arquivo2 = file("cadastro.json");
  $arquivo2 = implode($arquivo2);
  $arquivo2 = json_decode($arquivo2,TRUE);

  if(empty($arquivo)){
    for($i=0;$i<count($arquivo2);$i++){
      $chave = key($arquivo2[$i]);
      $arquivo[$chave] = array();
    }
  }else{
    $tem = False;
    for($i=0;$i<count($arquivo2);$i++){
      $chave = key($arquivo2[$i]);
      for($j=0;$j<count($arquivo);$j++){
        if(array_key_exists($chave,$arquivo)){
          $tem = True;
        }
      }
      if(!$tem){
        $arquivo[$chave] = array();
      }
      $tem = False;
    }
  }


  if(!empty($texto) && !empty($destinatario)){
    date_default_timezone_set('America/Maceio');
    $data = date("d/m/y");
    $hora = date("H:i");

    $dados=array("data"=>$data,"hora"=>$hora,"mensagem"=>$texto,"destinatario"=>$destinatario,"titulo"=>$titulo);
    $dados = (array) $dados;

    $user = (string)$_SESSION['usuario'];
    array_push($arquivo[$user],$dados);

    file_put_contents('historico.json',json_encode($arquivo));
    header('location: corretor.php');

    header('location: corretor.php?MsgSent=TRUE');
    
  }
  else{
    header('location: corretor.php?IncompleteData=TRUE');
    //echo "<script>alert('Dados incompletos!'); window.location = 'corretor.php'</script>";
  }

?>
