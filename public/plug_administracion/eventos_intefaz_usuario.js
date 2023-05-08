$(document).ready(function () {

  /** Permite el evento ocultar o visibilizar la entrada de texto apellido de
   * casada dependiendo de la casilla marcada segun sea el genero del propierati@*/
    $("#groupApellido_de_casada").hide();
    $('#generoPropietarioMasculino').on('click', function() {
        if ($(this).is(':checked')) {    
          $("#groupApellido_de_casada").hide("slow");
        } 
      });  

      $('#generoPropietarioFemenino').on('click', function() {
        if ($(this).is(':checked')) {       
          $("#groupApellido_de_casada").show(500);
        } 
      });

/** evento que permite el cambio de color de label de cada caja de texto
 *  del FORMULARIO REGISTRAR PROPIETARIO */
      $('#nombrePropietario').on('focus', function() {
        $('label[for="' + $(this).attr('id') + '"]').addClass('focus');
      }).on('blur', function() {
        $('label[for="' + $(this).attr('id') + '"]').removeClass('focus');
      });

      $('#apellidoPaternoPropietario').on('focus', function() {
        $('label[for="' + $(this).attr('id') + '"]').addClass('focus');
      }).on('blur', function() {
        $('label[for="' + $(this).attr('id') + '"]').removeClass('focus');
      });

      $('#apellidoMaternoPropietario').on('focus', function() {
        $('label[for="apellidoPaternoPropietario"]').addClass('focus');
      }).on('blur', function() {
        $('label[for="apellidoPaternoPropietario"]').removeClass('focus');
      });

      $('#ciPropietario').on('focus', function() {
        $('label[for="' + $(this).attr('id') + '"]').addClass('focus');
      }).on('blur', function() {
        $('label[for="' + $(this).attr('id') + '"]').removeClass('focus');
      });
      
      $('#celPropietario').on('focus', function() {
        $('label[for="' + $(this).attr('id') + '"]').addClass('focus');
      }).on('blur', function() {
        $('label[for="' + $(this).attr('id') + '"]').removeClass('focus');
      });
      
      $('#emailPropietario').on('focus', function() {
        $('label[for="' + $(this).attr('id') + '"]').addClass('focus');
      }).on('blur', function() {
        $('label[for="' + $(this).attr('id') + '"]').removeClass('focus');
      });
      
});

