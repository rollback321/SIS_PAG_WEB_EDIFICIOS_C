


let map;
var marker;
function  initMap(){
    map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: -16.5001, lng: -68.2147},
         zoom: 15,
     });

     marker = new google.maps.Marker({
         position: {lat:-16.5001, lng: -68.2147},
         map: map,
         draggable:true
        
     });

     google.maps.event.addListener(marker , 'dragend' , function(evt){
      $("#coordenadasEdificioLatitud").val(evt.latLng.lat().toFixed(6)); 
      $("#coordenadasEdificioLonguitud").val(evt.latLng.lng().toFixed(6));
      map.panTo(evt.latLng);   
     });

     map.setCenter(marker.position);
     marker.setMap(map);

     $("#distrito , #lugarRefencia").change(function (){
       movePin();
     });

     function movePin(){
       var geocoder = new google.maps.Geocoder();
       if($("#distrito").val() == "-"){
         textSelect = "";
       } else {
         textSelect = "Distrito "+ $("#distrito").val();
       }
       
       var textSelectZona = $("#lugarRefencia").val();
       var inputAddress = "La paz, El Alto "+textSelect+" "+textSelectZona;
       geocoder.geocode({
         'address' : inputAddress
       }, function ( results , status ){
         if(status == google.maps.GeocoderStatus.OK ){
             marker.setPosition(new google.maps.LatLng(results[0].geometry.location.lat() , results[0].geometry.location.lng()));
             map.panTo(new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng()));
             $("#coordenadasEdificioLatitud").val(results[0].geometry.location.lat()); 
             $("#coordenadasEdificioLonguitud").val(results[0].geometry.location.lng());
         }
       });
     }
}


$(document).ready(function () {
  
  /******* Al cerrar el modal se reinicia el formulario, limpiando datos*/
  $("#btn_cerrar_modal_edificios,#icon_cerrar_modal_edificios").click(function (){
    var form_ref = $('#formEdificio');
    var form = form_ref.validate();
    form.resetForm();
    $('#formEdificio')[0].reset();
    $("#formEdificio input").removeClass("is-valid");
  });

    $("#id_btn_abrir_maps").click(function (e) { 
        e.preventDefault();
        $("#contenedor_mostrar_google_maps").show();
    });
    
    $("#icon_cerrar_maps_google").click(function (e) { 
        e.preventDefault();
        $("#contenedor_mostrar_google_maps").hide();
    });



$("#formEdificio").validate({
  rules: {
    coordenadasEdificioLatitud: {
          required: true,                 
      },
      coordenadasEdificioLonguitud:{
          required: true,
      }
  },
  messages: {
    coordenadasEdificioLatitud: {
          required: "Campo obligatorio",
      },
      coordenadasEdificioLonguitud:{
        required: "Campo obligatorio",
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
  },
  submitHandler: function() {
        
    var data = $("#formEdificio").serialize();

        $.ajax({
          type: 'POST',
          url: base_url+"/registrar_edificio",
          data: data,
          dataType: 'json',
          beforeSend: function() {
              $('#btnSubmitEdificio').prop('disabled', true);
          },
          success: function(result) { 
            console.log(result);
            $("#hospedaje_id_edificio").val(result);
                   
          },
          error: function(xhr) {
              mensaje_error_servidor()
          },
          complete: function() {
              
                $('#btnSubmitEdificio').prop('disabled', false);
                mensaje("Edificio registrado con exito","Si lo desea, puede continuar con el registro del servivio hospedaje que brinda el edificio","success")
                $("#btn_registrar_datos_edificio_table").trigger("click");
                $('#formEdificio')[0].reset();
                $("#formEdificio input").removeClass("is-valid");
                $("#contenido_servicio_hospedaje").show();
              // $('#forPropietario')[0].reset();
              // $("#forPropietario input").removeClass("is-valid");
              // $(".select2").val("1").trigger("change"); 
          },

      });

  

  }
});



/***** Registrar Servicio_hospedaje */
$("#form_hospedaje").validate({
  rules: {
    hospedajeTipo: {
          required: true,                 
      }
  },
  messages: {
    hospedajeTipo: {
          required: "Campo obligatorio",
      }
  },
     errorElement: "small",           //elemento donde se introducira el tipo de error
     errorPlacement: function(error, element) {   // (tipo de error , elemento  input que se dio el error)
     // Add the `invalid-feedback` class to the error element
     error.insertAfter(element);
     error.addClass("invalid-feedback");
  },
  highlight: function(element, errorClass, validClass) {
      $(element).addClass("is-invalid").removeClass("is-valid");
  },
  unhighlight: function(element, errorClass, validClass) {
      $(element).addClass("is-valid").removeClass("is-invalid");
  },
  submitHandler: function() {
        
    var data = $("#form_hospedaje").serialize();

    $.ajax({
      type: 'POST',
      url: base_url+"/registrar_servicio_hospedaje",
      data: data,
      dataType: 'json',
      beforeSend: function() {
          $('#btnSubmitServicioEdificio').prop('disabled', true);
      },
      success: function(result) { 
              
              $("#t_body_hospedaje").html(result);
      },
      error: function(xhr) {
          mensaje_error_servidor()
      },
      complete: function() {
          
            $('#btnSubmitServicioEdificio').prop('disabled', false);
            mensaje("Registro exitoso",null,"success")
            $('#form_hospedaje')[0].reset();
            $("#form_hospedaje input").removeClass("is-valid");
            $("#hospedaje_calidad").removeClass("is-valid");
      },

  });

  

  }
});

});

function verEdificios(id){
    
  $("#id_propietario").val(id);
  $('#modal_edificio_registrar').hide();
  $.ajax({
      type: 'POST',
      url: base_url+"/verificar_si_existencia_propietario",
      data: {
          id_propietario: id
      },
      dataType: 'json',
      beforeSend: function() {
      },
      success: function(result) {
          
          

          if(result.modal != 0){
            $("#custom-tabs-one-home-tab").removeClass("active");
            $("#custom-tabs-one-home").removeClass("show active");

            $("#custom-tabs-one-profile-tab").addClass("active")
            $("#custom-tabs-one-profile").addClass("show active")
          } else {
            modal_body_button_registrar
            $('#modal_body_button_registrar').show();
             // $('#modal_edificio_registrar').show();
             $("#modal-xl").modal('show');
          }

                      
      },
      error: function(xhr) {
           mensaje_error_servidor()
      },
      complete: function() {
         
          // $('#btnSubmit').prop('disabled', false);
          // $('#forPropietario')[0].reset();
          // $("#forPropietario input").removeClass("is-valid");
      },

  });

}


function btn_registrar_edificio (){
  $('#modal_body_button_registrar').hide(500);
   $('#modal_edificio_registrar').show(500);
   $('#id_card_body_edificio').show();
   $('#id_card_fooder_edificio').show();
}


$(document).ready(function () {
  

  
  $.ajax({
        type: 'POST',
        url: base_url+"/listar_edificios",
        dataType: 'json',
        beforeSend: function() {
          
        },
        success: function(result) { 
          //console.log(result);
          $("#contenedor_edificios").html(result);
                
        },
        error: function(xhr) {
            mensaje_error_servidor()
        },
        complete: function() {
            
        },

    });
});

function buscar_edificio (){
      dato_buscar = $("#id_input_buscar_edificios").val().toUpperCase();
      div_s1 = $(".search_div1");
      var parrafo = div_s1.find(".search_div2");
      var elementos1 = document.querySelectorAll(".search_div1");
      var elementos = document.querySelectorAll(".search_div2");
    if(dato_buscar.replace(/^\s+|\s+$/g, '') != ""){    /**.replace(/^\s+|\s+$/g, '')  (quita los espacios) */
      for (var i = 0; i < parrafo.length; i++) {
        var contenido = parrafo[i].textContent.toUpperCase();
        elementos1[i].style.display = contenido.indexOf(dato_buscar) > -1 ? "" : "none" ;
      }
    } else {
      $(".search_div1").show();
    // dat.classList.add('elemento-oculto');
      
    }   
}

$(document).ready(function() {
  $('#id_input_buscar_edificios').on('input', function() {
    palabra = $(this).val().replace(/^\s+|\s+$/g, '');
    if (palabra.length === 0) {
      $(".search_div1").show();
    } 
  });
});
