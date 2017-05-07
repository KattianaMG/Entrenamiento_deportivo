jQuery.fn.extend({
    resaltar: function(busqueda, claseCSSbusqueda, contador){
        var regex = new RegExp("(<[^>]*>)|("+ busqueda.replace(/([-.*+?^${}()|[\]\/\\])/g,"\\$1") +')', 'ig');
        var nuevoHtml=this.html(this.html().replace(regex, function(a, b, c){
          var template = '';
          if (claseCSSbusqueda == "Highlighting") {
            return (a.charAt(0) == "<") ? a : "<span class=\""+ claseCSSbusqueda +" selection"+ contador +"\" id='selection"+ contador +"' data-toggle='popover"+ contador +"' data-html=\'true\' data-template=\'<div class=\"popover\"><div class=\"arrow\"></div><h3 class=\"popover-title popover-"+ claseCSSbusqueda +"\"></h3><div class=\"popover-content\"></div><div class=\"popover-footer\"><a onclick=\"eliminar("+ contador +", 1)\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></div></div>\' title='You chosed' data-content='hola1'>" + c + "</span>";
          }else if (claseCSSbusqueda == "Underlighting") {
            return (a.charAt(0) == "<") ? a : "<span class=\""+ claseCSSbusqueda +" selection"+ contador +"\" id='selection"+ contador +"' data-toggle='popover"+ contador +"' data-html=\'true\' data-template=\'<div class=\"popover\"><div class=\"arrow\"></div><h3 class=\"popover-title popover-"+ claseCSSbusqueda +"\"></h3><div class=\"popover-content\"></div><div class=\"popover-footer\"><a onclick=\"eliminar("+ contador +", 2)\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></div></div>\' title='You chosed' data-content='hola2'>" + c + "</span>";
          }else if (claseCSSbusqueda == "Circling") {
            return (a.charAt(0) == "<") ? a : "<span class=\""+ claseCSSbusqueda +" selection"+ contador +"\" id='selection"+ contador +"' data-toggle='popover"+ contador +"' data-html=\'true\' data-template=\'<div class=\"popover\"><div class=\"arrow\"></div><h3 class=\"popover-title popover-"+ claseCSSbusqueda +"\"></h3><div class=\"popover-content\"></div><div class=\"popover-footer\"><a onclick=\"eliminar("+ contador +", 3)\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></div></div>\' title='You chosed' data-content='hola3'>" + c + "</span>";
          }

        }));
        return nuevoHtml;
    }
});

/* attempt to find a text selection */
function getSelected() {
    if(window.getSelection) { return window.getSelection(); }
    else if(document.getSelection) { return document.getSelection(); }
    else {
        var selection = document.selection && document.selection.createRange();
        if(selection.text) { return selection.text; }
        return false;
    }
    return false;
}

function eliminar(count, objeto) {
  var countHigh = $('#cantHigh').html();
  var countUnder = $('#cantUnder').html();
  var countCircle = $('#cantCirc').html();
  //console.log($('#texto span[id=selection'+(count)+']').length);
  $('#texto span[id=selection'+(count)+']').popover('destroy');
  var contenido = $('#texto span[id=selection'+(count)+']').html();
  console.log(objeto);
  $("<span>"+contenido+"</span>").replaceAll('.selection'+(count)+'');

  if (objeto == 1) {
    countHigh--;
  }else if (objeto == 2) {
    countUnder--;
  }else if (objeto == 3) {
    countCircle--;
  }
  $('#cantHigh').html(countHigh);
  $('#cantUnder').html(countUnder);
  $('#cantCirc').html(countCircle);
}
/* create sniffer */
$(document).ready(function() {
    var count = 0;
    var countHigh = 0;
    var countUnder = 0;
    var countCircle = 0;

   $('#texto').mouseup(function() {
       var selection = getSelected();
       if(selection && (selection = new String(selection).replace(/^\s+|\s+$/g,''))) {
         $('input:checkbox[name=proposito]').each(function(){
          $(this).prop("checked", false);
         });
         $('input:text[name=proposito2]').val("");
         $('input:checkbox[name=accion]').each(function(){
          $(this).prop("checked", false);
         });
         $("#texto").resaltar(selection, $('input:radio[name="options"]:checked').val(), count);
         $(".word").html(selection);
         $(function () {
           for (var i = 0; i <= count; i++) {
             $('[data-toggle="popover'+ i +'"]').popover();
           }
          });
          countHigh = $('#cantHigh').html();
          countUnder = $('#cantUnder').html();
          countCircle = $('#cantCirc').html();
         if (($('input:radio[name="options"]:checked').val()) == "Highlighting") {
           countHigh++;
         }else if (($('input:radio[name="options"]:checked').val()) == "Underlighting") {
           countUnder++;
         }else if (($('input:radio[name="options"]:checked').val()) == "Circling") {
           countCircle++;
         }
         setTimeout(function() {
              $('#myModal').modal('toggle');
          }, 1000);
          $("#siguiente").click(function () {
            $('#myModal').modal('hide');
            $('#myModal').modal('handleUpdate');
          });
          $("#save").click(function () {
            var proposit = "";
            var action = "";
            $('input:checkbox[name=proposito]:checked').each(function(){
            	//cada elemento seleccionado
            	proposit = proposit + ", " + ($(this).val());
            });
            if (($('input:text[name=proposito2]').val()) != "") {
              proposit = proposit + ", " + ($('input:text[name=proposito2]').val());
            }
            proposit = proposit.substr(1,proposit.length);
            proposit = "<strong>Propositos: </strong>" + proposit + "<br>";
            $('input:checkbox[name=accion]:checked').each(function(){
            	//cada elemento seleccionado
            	action = action + ", " + ($(this).val());
            });
            action = action.substr(1,action.length);
            action = proposit + "<strong>Acciones:</strong> " + action;
            console.log(action);
            $('#texto span[id=selection'+(count-1)+']').attr("data-content", action);

            $('#myModal1').modal('hide');
          });

           $('#cantHigh').html(countHigh);
           $('#cantUnder').html(countUnder);
           $('#cantCirc').html(countCircle);
           /*$.ajax({
               type: 'post',
               url: 'ajax-selection-copy.php',
               data: 'selection=' + encodeURI(selection)
           });*/
           count++;
       }

  });


  $("#cancelar1").click(function () {
      console.log($('#texto span[id=selection'+(count-1)+']'));
      var contenido = $('#texto span[id=selection'+(count-1)+']').html();
      console.log(contenido);
      $("<span>"+contenido+"</span>").replaceAll('.selection'+(count-1)+'');

      if (($('input:radio[name="options"]:checked').val()) == "Highlighting") {
        countHigh--;
      }else if (($('input:radio[name="options"]:checked').val()) == "Underlighting") {
        countUnder--;
      }else if (($('input:radio[name="options"]:checked').val()) == "Circling") {
        countCircle--;
      }
      $('#cantHigh').html(countHigh);
      $('#cantUnder').html(countUnder);
      $('#cantCirc').html(countCircle);
  });


});
