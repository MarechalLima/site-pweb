<?php
  session_start(); //Inicia a sessão
  $texto = $_POST['texto'];//Pega a emnsagem que veio pelo post do corretor.php
  $destinatario  =$_POST['dest'];//Msm coisa que antes
  $titulo = $_POST['titulo'];

  $arquivo = file("historico.json");//Pega oq está dentro do .json e coloca num array, porem ele coloca tudo que esta dentro do .json apenas no index 0 de um array.

  if(empty($arquivo)){//Analisa se o .json está vazio
    $arquivo = array("admin"=>array(),"nick"=>array(),"wolf"=>array());//Caso ele esteja vazio faz com que a variavel criada anteriormente receba o valor de um objeto php que tem 3 array's dentro, cada um com seu respectivo 'nome', fiz um objeto pois é mais facil de visualizar.
    $arquivo = (array) $arquivo;//Faz o cast de objeto php para um array associativo, pois o array_push() so funciona com array's.
  }else{
    $arquivo = implode($arquivo);//Caso o .json não esteja vazio ele transform a variavel arquivo em uma string usando a função implode() e tal string estará no formato json, pois todas as strings que estão dentro do .json estão nesse formato.
    $arquivo = json_decode($arquivo,TRUE);//Transforma a string json em um array associativo, o TRUE na função é exatamente para isso, caso não o tivesse colocado a variavel receberia um objeto php.
  }


  if(!empty($texto) && !empty($destinatario)){
    $data = date("d/m/y");//Pega a data atual
    $hora = date("H:i");//Pega a hora atual

    $dados=array("data"=>$data,"hora"=>$hora,"mensagem"=>$texto,"destinatario"=>$destinatario,"titulo"=>$titulo);//Faz um objeto php com os dados já pegos do corretor.php, mais a data e hora.
    $dados = (array) $dados;//Transforma em array associativo

    $user = (string)$_SESSION['usuario'];//Pega o usuario que está logado, $_SESSION['usuario'] foi criada na login.php, basta iniciar a sessão para qualquer pagina do projeto ter acesso ao usuario.
    array_push($arquivo[$user],$dados);//Insere os dados no index do usuario corrente, no array do arquivo.

    file_put_contents('historico.json',json_encode($arquivo));//json_encode() transforma o array novamente em string json, e a função file_puts_contents() coloca tal string no arquivo .json
    header('location: corretor.php');
  }
  else{
    echo "<script>alert('Dados incompletos!'); window.location = 'corretor.php'</script>";
  }
  // CODIGO "INUTIL", FIZ UMA COPIA DISSO PARA O EMAIL.PHP
?>
