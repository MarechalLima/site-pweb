<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link rel="stylesheet" type="text/css" href="css/editor.css">
    <script src="js/corretor.js">
    </script>
  </head>
  <body>
    <?php include 'supmenu.php';
    session_start();
    if ($_SESSION['logado']==FALSE) {
      echo "<script>alert('Usuário não logado!'); window.location = 'index.php'</script>";
      exit();
    }
    ?>

    <div class="container">
      <form method="post" action="email.php" class="col s12">

      <div class="row">
        <div class="input-field col s12">
          <input type="text" id="titulo-email" class="materialize-textarea" name="titulo"></textarea>
          <label for="titulo-email">Título</label>
        </div>
      </div>

      <textarea id="texto-email" name="texto" style="display: none"></textarea>

      <div class="row">

        <div class="col s12 grey-text text-lighteen-1" style="">
          Texto
        </div>
        <div class="input-field col s12">

          <div id="editor-texto" contenteditable="true" class="grey lighten-2" style="padding:1em">

          </div>
        </div>

        <div class="col s12">
          <div class="offset-s1 col s1">
            <button type="button" onclick="formatCode('bold')" class="waves-effect waves-light btn-flat"><i class="material-icons">format_bold</i></button>
          </div>
          <div class="col s1">
            <button type="button" onclick="formatCode('italic')" class="waves-effect waves-light btn-flat"><i class="material-icons">format_italic</i></button>
          </div>
          <div class="col s1">
            <button type="button" onclick="formatCode('underline')"class="waves-effect waves-light btn-flat"><i class="material-icons">format_underline</i></button>
          </div>
          <div class="col s1">
            <button type="button" onclick="formatCode('removeFormat')" class="waves-effect waves-light btn-flat"><i class="material-icons">format_clear</i></button>
          </div>
          <div class="col s1">
            <button type="button" class="waves-effect waves-light btn-flat"><i class="material-icons">text_fields</i></button>
          </div>
          <div class="col s1">
            <button type="button" class="waves-effect waves-light btn-flat"><i class="material-icons">format_list_bulleted</i></button>
          </div>
          <div class="col s1">
            <button type="button" class="waves-effect waves-light btn-flat"><i class="material-icons">format_list_numbered</i></button>
          </div>
          <div class="col s1">
            <button type="button" class="waves-effect waves-light btn-flat"><i class="material-icons">format_color_text</i></button>
          </div>
          <div class="col s1">
            <button type="button" class="waves-effect waves-light btn-flat"><i class="material-icons">format_color_fill</i></button>
          </div>
        </div>

      </div>



      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="dest" class="validate">
          <label for="email" data-error="Email inválido" data-success="Email válido">Email</label>
        </div>
      </div>


      <button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar
        <i class="material-icons right">send</i>
      </button>
      <a href="historico.php"  class="btn waves-effect waves-light orange"><i class="material-icons left">history</i> Ver histórico </a>
    </div>


  </body>
</html>
