$(document).ready(function () {
    $("#groupApellido_de_casada").hide();
    $('#generoPropietarioMasculino').on('click', function() {
        if ($(this).is(':checked')) {
        
          $("#groupApellido_de_casada").hide();
          // Aquí puedes realizar cualquier acción que desees cuando el checkbox esté seleccionado
        } 
      });  

      $('#generoPropietarioFemenino').on('click', function() {
        if ($(this).is(':checked')) {
         
          $("#groupApellido_de_casada").show();
          // Aquí puedes realizar cualquier acción que desees cuando el checkbox esté seleccionado
        } 
      });


      $('#nombrePropietario').on('focus', function() {
        $('label[for="' + $(this).attr('id') + '"]').addClass('focus');
      }).on('blur', function() {
        $('label[for="' + $(this).attr('id') + '"]').removeClass('focus');
      });

      $('#apellidoPaternoPropietario, #apellidoMaternoPropietario').on('focus', function() {
        $('label[for="' + $(this).attr('id') + '"]').addClass('focus');
      }).on('blur', function() {
        $('label[for="' + $(this).attr('id') + '"]').removeClass('focus');
      });


});

