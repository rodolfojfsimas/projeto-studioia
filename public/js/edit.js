  /*CODEMIRROR*/
  
  var editor = CodeMirror.fromTextArea(document.getElementById("htmlCode"), {
    lineNumbers: true,    
    mode: 'htmlmixed',
    extraKeys: {
      "Ctrl-Space": "autocomplete",
      "Alt-F": "findPersistent",
      "Ctrl-Q": function(cm) {
        cm.foldCode(cm.getCursor());
      }
    },
    styleActiveLine: true,
    matchBrackets: true,      
    smartIndent: true,
    autoCloseTags: true,
    autoCloseBrackets: true,    
    autoRefresh: true,
    matchTags: {bothTags: true}
  /*  theme: 'dracula'*/
  });

  /*SELECIONAR TEMAS*/
  var input = document.getElementById("select");
  function selectTheme() {
    var theme = input.options[input.selectedIndex].textContent;
    editor.setOption("theme", theme);
    location.hash = "#" + theme;
  }

  var choice = (location.hash && location.hash.slice(1)) ||
  (document.location.search && decodeURIComponent(document.location.search.slice(1)));
  if (choice) {
    input.value = choice;
    editor.setOption("theme", choice);
  }
  CodeMirror.on(window, "hashchange", function() {
  var theme = location.hash.slice(1);
  if (theme) {input.value = theme; selectTheme();}
});
  
  /*IFRAME*/
  
  function updatePreview() {
    var previewFrame = document.getElementById('preview');
    var preview =  previewFrame.contentDocument ||  previewFrame.contentWindow.document;
    preview.open();
    preview.write(editor.getValue());
    preview.close();
  }

  editor.on("change", updatePreview);
  updatePreview();

  editor.setSize(null, editor.defaultTextHeight() + 740 * 1);


  /*COPIAR TEXTAREA*/
  
  
$( "#copycodemirror" ).click(function() {
  const code = editor.getValue();
  navigator.clipboard.writeText(code).then(function() {
    console.log("Código copiado");
  }, function() {
    console.error("Falha na copia do código");
  });

  setTimeout(function(){
    $( "#timeout" ).css( "color", "green").css( "font-size", "14px" ).css( "font-weight", "bold" ) }, 10);
    setTimeout(function(){
      $( "#timeout" ).css( "color", "transparent" ).css( "font-size", "0px" ) }, 2000);

});
/* REFRESH */


$('#refreshcodemirror').click ( function(){
  editor.setValue("");
});

/*HTML*/

$('#addhtml').click ( function(){
  editor.setValue("<!DOCTYPE html>\n<html lang=\"pt-br\">\n  <head>\n    <meta charset=\"utf-8\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n    <title>Estrutura HTML</title>\n  </head>\n  <style>\n  </style>\n  <body>\n    <h1>Bem-vindo(a)</h1>\n  <script>\n  </script>\n  </body>\n</html>");
});



