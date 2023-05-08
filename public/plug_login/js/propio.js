$contardor_de_fallar_iniciar_sesion = 1;

$("#id_alerta_error_usuario_nivel1").hide();

/****************** Petición para la verificacion de usuario  */
$("#form_register_login").submit(function(event) {
    event.preventDefault();
    let datos = $("#form_register_login").serialize();
    $.ajax({
        url: 'adm',
        type: 'post',
        data: datos,
        dataType: 'json',
        success: function(datos) {
            if (datos != "0") {
                $("#id_alerta_error_usuario_nivel1").hide();
             //  console.log(datos);
                window.location = js_base_url+"ad" 
            } else {
                $("#id_alerta_error_usuario_nivel1").show();
                $("#password-field").val("");
                $("#id_alerta_error_usuario_nivel1").fadeOut(6000);
               // console.log("errores:"+$contardor_de_fallar_iniciar_sesion+"  ");
                $contardor_de_fallar_iniciar_sesion = $contardor_de_fallar_iniciar_sesion + 1;

            }

           // console.log(datos);
        }, error: function(xhr) {
              mensaje_error_servidor()
       }
    });
});

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