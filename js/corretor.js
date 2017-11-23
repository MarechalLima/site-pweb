function formatCode (command, value) {
  //document.getElementById("editor-texto").focus();
  document.execCommand(command, false, value)
}

function setColor (color, cmd) {
  document.execCommand('styleWithCSS', false, true);
  document.execCommand(cmd, false, color)
}

$("#text-color").colorPick({
  'onColorSelected': function() {
    setColor(this.color, 'foreColor');
  }
});

$("#color-fill").colorPick({
  'onColorSelected': function() {
    setColor(this.color, 'hiliteColor');
  }
});
