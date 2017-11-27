<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link rel="stylesheet" type="text/css" href="css/editor.css">
    <link rel="stylesheet" type="text/css" href="css/colorPick.min.css">
    <script src="js/corretor.js">
    </script>
    <link rel="stylesheet" href="css/transicao/keyframes.css">
    <link rel="stylesheet" href="css/transicao/animation.scss">
  </head>
  <body>
    <?php include 'supmenu.php';
    session_start();
    if ($_SESSION['logado']==FALSE) {
      echo "<script>alert('Usuário não logado!'); window.location = 'index.php'</script>";
      exit();
    }
    ?>

    <div class="container" style="padding-bottom: 2em;">
      <form method="post" action="email.php" class="col s12" onsubmit="getContent()">
  <div class="m-right-panel m-page scene_element scene_element--fadeinright">
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

          <div id="editor-texto" contenteditable="true" class="grey lighten-2"
          style="padding:2em">

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
            <button type="button" class="waves-effect waves-light btn-flat dropdown-button"
              data-activates="dropdown-size"><i class="material-icons">text_fields</i></button>
          </div>

          <div class="col s1">
            <button type="button" onclick="formatCode('insertUnorderedList')" class="waves-effect waves-light btn-flat"><i class="material-icons">format_list_bulleted</i></button>
          </div>
          <div class="col s1">
            <button type="button" onclick="formatCode('insertOrderedList')" class="waves-effect waves-light btn-flat"><i class="material-icons">format_list_numbered</i></button>
          </div>
          <div class="col s1">
            <button type="button" id="text-color" class="waves-effect waves-light btn-flat"><i class="material-icons">format_color_text</i></button>
          </div>
          <div class="col s1">
            <button type="button" id="color-fill" class="waves-effect waves-light btn-flat"><i class="material-icons">format_color_fill</i></button>
          </div>
        </div>

        <a href="#" class="color"></a>

      </div>



      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="dest" class="validate">
          <label for="email" data-error="Email inválido" data-success="Email válido">Email    </label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar
        <i class="material-icons right">send</i>
      </button>
    </form>

      <!-- Dropdown do botao text_fields-->
      <ul id='dropdown-size' class='dropdown-content'>
        <li><a href="#" onclick="formatCode('fontSize',7)" style="font-size: 16pt;">Enorme</a></li>
        <li><a href="#" onclick="formatCode('fontSize',5)" style="font-size: 12pt;">Grande</a></li>
        <li><a href="#" onclick="formatCode('fontSize',3)" style="font-size: 10pt;">Médio</a></li>
        <li><a href="#"onclick="formatCode('fontSize',1)" style="font-size: 8pt;">Pequeno</a></li>
      </ul>



      <a href="historico.php"  class="btn waves-effect waves-light orange"><i class="material-icons left">history</i> Ver histórico </a>
    </div>
  </div>

    <script src="js/colorPick.min.js"></script>
    <script type="text/javascript">
      $("#text-color").colorPick({
        'onColorSelected': function() {
          setColor(this.color, 'foreColor');
        },
        'initialColor' : 'rgba(0,0,0,1)'
      });

      $("#color-fill").colorPick({
        'onColorSelected': function() {
          setColor(this.color, 'hiliteColor');
        },
        'initialColor' : 'rgba(0,0,0,0)'
      });
    </script>
  </body>


</html>
