


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
  }
});
});

// Registrar edificio

$.validator.setDefaults({
           
    submitHandler: function() {
        
         var data = $("#formEdificio").serialize();
    
         $.ajax({
            type: 'POST',
            url: base_url+"/registrar_edificio",
            data: data,
            dataType: 'json',
            beforeSend: function() {
              //  $('#btnSubmit').prop('disabled', true);
            },
            success: function(result) {


                console.log(result);
                // if(result.status){
                //     mensaje_registro_exitoso_multi_opcion(result.data);
                //     tableInicio.ajax.reload(null, false);
                // } else {
                //     mensaje("Existe un registro identico 'no se pudo registrar' ");
                // }
            },
            error: function(xhr) {
             //   mensaje_error_servidor()
            },
            complete: function() {
               
                // $('#btnSubmit').prop('disabled', false);
                // $('#forPropietario')[0].reset();
                // $("#forPropietario input").removeClass("is-valid");
                // $(".select2").val("1").trigger("change"); 
            },

        });

       
 
     }

 });



