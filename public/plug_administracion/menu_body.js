$(document).ready(function () {

    function limpiar_campos_registar_propietario(){
        $('#forPropietario').removeClass('is-valid');
        $('#forPropietario').validate().resetForm();
    }
/*****Validacion para agregar solo texto */    
    $.validator.addMethod("pattern", function(value, element, pattern) {
        if (this.optional(element)) {
          return true;
        }
        if (typeof pattern === "string") {
          pattern = new RegExp("^(?:" + pattern + ")$");
        }
        return pattern.test(value);
      }, "Por favor, introduce un valor válido.");

/****** Validacion para una cantidad limitada de espacios */
      $.validator.addMethod("limitedSpaces", function(value, element, param) {
        var spaceCount = value.split(" ").length - 1;
        return spaceCount <= param;
      }, $.validator.format("No se permiten más de {0} espacios."));
 /***** Validar el ci, Solo se permiten letras, números, espacios y guiones. */
        $.validator.addMethod("lettersNumbersSpacesAndDash", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9\s\-]+$/.test(value);
          }, "Solo se permiten letras, números, espacios y guiones.");
          
/***** Validar numero de celular   */
$.validator.addMethod("validRange", function(value, element) {
    return this.optional(element) || (value >= 60000000 && value <= 79999999);
  }, "Introduzca un número de celular valido");

//   /****** Validacion para C.I.  menos 4 letras, espacios, guiones y números. */
//   $.validator.addMethod("atLeastFourLettersSpacesDashesNumbers", function(value, element) {
//     return this.optional(element) || /[a-zA-Z].*[a-zA-Z].*[a-zA-Z].*[a-zA-Z]/.test(value) && /^[a-zA-Z0-9-\s]+$/.test(value);
//   }, "Ingrese al menos 4 letras, espacios, guiones y números.");
  
            $("#forPropietario").validate({
            rules: {
                nombrePropietario: {
                    required: true,
                    minlength: 3,
                    maxlength: 70,
                    pattern: /^[a-zA-Z\s]*$/ ,
                    limitedSpaces: 8,
                       
                },
                apellidosPropietario:{
                    required: true,
                    minlength: 3,
                    maxlength: 70,
                    pattern: /^[a-zA-Z\s]*$/ ,
                    limitedSpaces: 8 
                } ,
                ciPropietario:{
                    required: true,
                    minlength: 4,
                    maxlength:20,
                    lettersNumbersSpacesAndDash: true,
                    limitedSpaces: 8 
                } ,
                celPropietario:{
                    required: true,
                    minlength: 8,
                    maxlength: 8,
                    validRange: true
                },
                emailPropietario:{
                    maxlength: 50,
                    email:true
                }

            },
            messages: {
                nombrePropietario: {
                    required: "Campo obligatorio",
                    minlength: "Introduzca nombre existente",
                    maxlength: "Hay un exceso de contenido, Verifique los espacios de texto en exceso",
                    pattern: "Introduzca nombre coherente",
                    limitedSpaces: "Nose permite espacios de texto multiples, procura añadir de 1 a 3 como máximo"
                },
                apellidosPropietario:{
                    required: "Debe introducir sus apellidos",
                    minlength: "El campo debe tener minimo {0} caracteres",
                    maxlength: "Hay un exceso de contenido, Verifique los espacios de texto en exceso",
                    pattern: "Introduzca apellido coherente",
                    limitedSpaces: "Nose permite espacios de texto multiples, procura añadir de 1 a 3 como máximo"
                },
                ciPropietario:{
                    required: "Introduzca su C.I.",
                    minlength: "C.I. inexistente",
                    maxlength: "C.I. invalido",
                    lettersNumbersSpacesAndDash: "No se permiten caracteres especiales a excepcion de '-'",
                    limitedSpaces: "Nose permite espacios de texto multiples, procura añadir de 1 a 3 como máximo"
                },
                 celPropietario:{
                    required: "Complete el campo",
                    minlength: "Introduzca un número de celular coherente",
                    maxlength: "Introduzca un número de celular coherente",
                    validRange: "Introduzca un número de celular coherente"
                },
                emailPropietario:{
                    maxlength: "Verifique la existencia del correo",
                    email:"Introduzca un correo válido"
                }
            },
               errorElement: "small",           //elemento donde se introducira el tipo de error
               errorPlacement: function(error, element) {   // (tipo de error , elemento  input que se dio el error)
               // Add the `invalid-feedback` class to the error element
               error.addClass("invalid-feedback");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.next("label"));
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });
});

$.validator.setDefaults({
           
    submitHandler: function() {
        
         var data = $("#forPropietario").serialize();
         $.ajax({
            type: 'POST',
            url: base_url+"/registrar",
            data: data,
            dataType: 'json',
            beforeSend: function() {
                $('#btnSubmit').prop('disabled', true);
            },
            success: function(result) {


                console.log(result);
                // if (result.status) {
                //     notificacionUsuario(type = 'success', message = 'Empresa creada correctamente', icono = 'bx bx-check-circle');
                //     tableEmpresa.ajax.reload(null, false);
                //     $('#formEmpresa')[0].reset();
                //     $('.form-control').removeClass('is-valid');
                // } else {
                //     $.each(result.errors, function(key, val) {
                //         $('input[name="' + key + '"]').next().html(val).addClass('has-error');
                //         $('select[name="' + key + '"]').next().html(val).addClass('has-error');
                //     })
                //     notificacionUsuario(type = 'error', message = 'Verifique los datos que ingreso', icono = 'bx bx-x-circle');
                // }

                mensaje();
            },
            error: function(xhr) {
          //      notificacionUsuario(type = 'error', message = 'Error de servidor', icono = 'bx bx-x-circle');
          alert("orcurrio algun error");
            },
            complete: function() {
               
                $('#btnSubmit').prop('disabled', false);
                $('#forPropietario')[0].reset();
                $("#forPropietario input").removeClass("is-valid");
            },

        });

       
 
    }

});
 
function mensaje(){
    Swal.fire("Registro exitoso");
}