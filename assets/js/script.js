$(document).ready(function(){
  $( '#toolbar-bold' ).on('click', function(){
    var cursorPosStart = $('#wpTextbox1').prop('selectionStart');
    var cursorPosEnd = $('#wpTextbox1').prop('selectionEnd');
    var v = $('#wpTextbox1').val();
    var textBefore = v.substring(0,  cursorPosStart );
    var textAfter  = v.substring( cursorPosEnd, v.length );
    $('#wpTextbox1').val( textBefore+ "''' Text Bold '''" +textAfter );
  });
  $( '#toolbar-italic' ).on('click', function(){
    var cursorPosStart = $('#wpTextbox1').prop('selectionStart');
    var cursorPosEnd = $('#wpTextbox1').prop('selectionEnd');
    var v = $('#wpTextbox1').val();
    var textBefore = v.substring(0,  cursorPosStart );
    var textAfter  = v.substring( cursorPosEnd, v.length );
    $('#wpTextbox1').val( textBefore+ "'' Text Italic ''" +textAfter );
  });
  $( '#toolbar-link' ).on('click', function(){
    var cursorPosStart = $('#wpTextbox1').prop('selectionStart');
    var cursorPosEnd = $('#wpTextbox1').prop('selectionEnd');
    var v = $('#wpTextbox1').val();
    var textBefore = v.substring(0,  cursorPosStart );
    var textAfter  = v.substring( cursorPosEnd, v.length );
    $('#wpTextbox1').val( textBefore+ "[[id]]" +textAfter );
  });
  $( '#toolbar-ref' ).on('click', function(){
    var cursorPosStart = $('#wpTextbox1').prop('selectionStart');
    var cursorPosEnd = $('#wpTextbox1').prop('selectionEnd');
    var v = $('#wpTextbox1').val();
    var textBefore = v.substring(0,  cursorPosStart );
    var textAfter  = v.substring( cursorPosEnd, v.length );
    $('#wpTextbox1').val( textBefore+ "<ref> reference </ref>" +textAfter );
  });

  $( ".doSearch" ).on( "keydown", function(event) {

   if(event.which == 13)
      window.location.href = $(this).val();
 });
});
