$(document).ready(function () {

    $('.select2').select2({
        dropdownParent: $('#modalRegistrarPropietario'),
        theme : "bootstrap4",
        placeholder: "Seleccionar opcion"
    })
       
                /*===================================================
                                VARIABLES GLOBALES
                =====================================================*/
                


    /******* Permiten limpiar las cajas de textos en caso de que haya algún texto enla
       interfaz de los modales al momento de registrar */
        $("#cerrar_modal_registrar_propietario").click(function (){
            var form_ref = $('#forPropietario');
            var form = form_ref.validate();
            form.resetForm();
            $('#forPropietario')[0].reset();
            $("#forPropietario input").removeClass("is-valid");
          
        });

        $("#icon_cerrar_modal_registrar_propietario").click(function (){
            var form_ref = $('#forPropietario');
            var form = form_ref.validate();
            form.resetForm();
            $('#forPropietario')[0].reset();
            $("#forPropietario input").removeClass("is-valid");
         
        });
        

        /******** Instancia el table */
                tableInicio = $('#tableInicio').DataTable({
                        ajax:  base_url+'/listar_datos_dueño',
                        responsive : false
                });
   
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
  }, "Introduzca un número de celular con ocho caracteres");

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
                },
                 celPropietario:{
                    required: "Complete el campo",
                    minlength: "Introduzca un número de celular con ocho dígitos",
                    maxlength: "Introduzca un número de celular con ocho dígitos",
                    validRange: "Introduzca un número de celular con ocho dígitos"
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

                if(result.status){
                    mensaje_registro_exitoso_multi_opcion();
                    tableInicio.ajax.reload(null, false);
                } else {
                    mensaje("Existe un registro identico 'no se pudo registrar' ");
                }
            },
            error: function(xhr) {
                mensaje_error_servidor()
            },
            complete: function() {
               
                $('#btnSubmit').prop('disabled', false);
                $('#forPropietario')[0].reset();
                $("#forPropietario input").removeClass("is-valid");
            },

        });

       
 
    }

});
 



function eliminar_registro (registro_id){
    $.ajax({
        type: 'POST',
        url: base_url+"/eliminar_registro",
        data: {
            id_propietario : registro_id
        },
        dataType: 'json',
        success: function(result) {
            console.log(result);
            tableInicio.ajax.reload(null, false);
        },
        error: function(xhr) {
      //      notificacionUsuario(type = 'error', message = 'Error de servidor', icono = 'bx bx-x-circle');
      mensaje_error_servidor()
        }
    });
}




function modificar_registro(id){
    $.ajax({
        type: 'POST',
        url: base_url+"/listar_registro_a_modificar",
        data: {
            id_propietario : id
        },
        dataType: 'json',
        success: function(result) {
          //  console.log(result);
            $("#nombrePropietario_modificar").val(result[0].nombre_dueño);
            $("#id_propietario_modificar").val(result[0].id);
            $("#apellidosPropietario_modificar").val(result[0].apellidos);
            $("#ciPropietario_modificar").val(result[0].ci);
            $("#celPropietario_modificar").val(result[0].celular);
            $("#emailPropietario_modificar").val(result[0].correo);
            $('#modalModifcarRegistro').modal('show');


            $("#forPropietario_modificar").validate({
                rules: {
                    nombrePropietario_modificar: {
                        required: true,
                        minlength: 3,
                        maxlength: 70,
                        pattern: /^[a-zA-Z\s]*$/ ,
                        limitedSpaces: 8,
                           
                    },
                    apellidosPropietario_modificar:{
                        required: true,
                        minlength: 3,
                        maxlength: 70,
                        pattern: /^[a-zA-Z\s]*$/ ,
                        limitedSpaces: 8 
                    } ,
                    ciPropietario_modificar:{
                        required: true,
                        minlength: 4,
                        maxlength:20,
                        lettersNumbersSpacesAndDash: true,
                        limitedSpaces: 8 
                    } ,
                    celPropietario_modificar:{
                        required: true,
                        minlength: 8,
                        maxlength: 8,
                        validRange: true
                    },
                    emailPropietario_modificar:{
                        maxlength: 50,
                        email:true
                    }
    
                },
                messages: {
                    nombrePropietario_modificar: {
                        required: "Campo obligatorio",
                        minlength: "Introduzca nombre existente",
                        maxlength: "Hay un exceso de contenido, Verifique los espacios de texto en exceso",
                        pattern: "Introduzca nombre coherente",
                        limitedSpaces: "Nose permite espacios de texto multiples, procura añadir de 1 a 3 como máximo"
                    },
                    apellidosPropietario_modificar:{
                        required: "Debe introducir sus apellidos",
                        minlength: "El campo debe tener minimo {0} caracteres",
                        maxlength: "Hay un exceso de contenido, Verifique los espacios de texto en exceso",
                        pattern: "Introduzca apellido coherente",
                        limitedSpaces: "Nose permite espacios de texto multiples, procura añadir de 1 a 3 como máximo"
                    },
                    ciPropietario_modificar:{
                        required: "Introduzca su C.I.",
                        minlength: "C.I. inexistente",
                        maxlength: "C.I. invalido",
                        lettersNumbersSpacesAndDash: "No se permiten caracteres especiales a excepcion de '-'",
                        limitedSpaces: "Nose permite espacios de texto multiples, procura añadir de 1 a 3 como máximo"
                    },
                     celPropietario_modificar:{
                        required: "Complete el campo",
                        minlength: "Introduzca un número de celular debe contar con 8 digitos",
                        maxlength: "Introduzca un número de celular debe contar con 8 digitos",
                        validRange: "Introduzca un número de celular debe contar con 8 digitos"
                    },
                    emailPropietario_modificar:{
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

        },
        error: function(xhr) {
          mensaje_error_servidor()
        }
    });

   
    $.validator.setDefaults({          
        submitHandler: function() {
            
             var data = $("#forPropietario_modificar").serialize();
             $.ajax({
                type: 'POST',
                url: base_url+"/modificar_registro",
                data: data,
                dataType: 'json',
                beforeSend: function() {
                    $('#btnSubmit').prop('disabled', true);
                },
                success: function(result) {
                    
                  //  console.log(result);
                    $('#modalModifcarRegistro').modal('hide');
                    tableInicio.ajax.reload(null, false);
                    Swal.fire("Registro modificado con exito");
                         
                },
                error: function(xhr) {
                     mensaje_error_servidor()
                },
                complete: function() {
                   
                    $('#btnSubmit').prop('disabled', false);
                    $('#forPropietario')[0].reset();
                    $("#forPropietario input").removeClass("is-valid");
                },
    
            });
    
           
     
        }
    
    });
  
}
/*================================================================
=                         MENSAJES EMERGENTES                  =
================================================================*/
function verEdificios (id){
    $("#modal-xl").modal('show');
}



/******* Mensaje "Registro exitoso , Error de registro " */
function mensaje(mensaje){
    Swal.fire(mensaje);
}

/******* Mensaje "Registro exitoso" opcion de registrar edificio */
function mensaje_registro_exitoso_multi_opcion(){
    Swal.fire({
        title: 'Registro exitoso',
        text: "Desea continuar con el registro del edificio cholet",
        icon: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si continuar'
      }).then((result) => {
        if (result.isConfirmed) {
          
                /*** Vaciar el formulario y resetear las validaciones */
                var form_ref = $('#forPropietario');
                var form = form_ref.validate();
                form.resetForm();
                $('#forPropietario')[0].reset();
                $("#forPropietario input").removeClass("is-valid");

                $('#modalRegistrarPropietario').modal('hide');
                $('#ver').modal('show');
                
        


        }
      })
}


function ventana_confirmacion_delete (registro_id){
    Swal.fire({
        title: 'Esta seguro de eliminar el registro?',
        text: "Confirme si esta seguro de eliminar el registro",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si eliminar'
      }).then((result) => {
        if (result.isConfirmed) {
          eliminar_registro (registro_id);
          Swal.fire(
            'Registro eliminado',
            'Registro se elimino con exito',
            'success'
          )
        }
      })
}

 /****** Mensaje de error al servidor */
 var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
function mensaje_error_servidor(){
    Toast.fire({
        icon: 'error',
        title: 'Error de servidor'
    });
}
