<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelEdificioUbicacion;
use App\Models\ModelEdificioCholet;
use App\Models\ModelHospedaje;
use App\Models\ModelServicioAlimentacion;
use App\Models\ModelServiciosBasicos;
use App\Models\ModelDatosClimatologicos;


class Edificio_cholet extends Controller{

    public function __construct()
    {
        /******** Se verifica si la sesion existe */
        $session = session();
        $this->response = \Config\Services::response();
        $this->miVariable = $session->get('nombre');
            if(!$this->miVariable){      
              return $this->response->redirect('admin');         
            }
    }

public function registrar (){


    $data_edificio_ubicacion = [
     "coordenadas_utm_latitud" =>   $this->request->getPost('coordenadasEdificioLatitud'),
     "coordenadas_utm_longuitud" => $this->request->getPost('coordenadasEdificioLonguitud'),
     "sitios_referencia" => $this->request->getPost('sitiosReferencia'),
     "distrito" => $this->request->getPost('distritoPropiedad'),
     "direccion" => $this->request->getPost('direccionPropiedad'),
     "altitud" => $this->request->getPost('altitudPropiedad'),
     "estado_update" => 0,
     "estado_delete" => 0,
     "fecha_registro" =>  date('Y-m-d')
    ];
    
    $modelo = new ModelEdificioUbicacion();
    $id_ubicacion = $modelo->insertar_datos($data_edificio_ubicacion);

    $data_edificio = [
        
        "nombre_edificio_cholet" =>   $this->request->getPost('nombre_edificio'),


        "categoria_edificio" => $this->request->getPost('categoriaEdificio'),
        "tipo_edificio" => $this->request->getPost('tipoEdificio'),
        "sub_tipo_edificio" => $this->request->getPost('subTipoEdificio'),
        "estado_actual" => $this->request->getPost('descripcionEstadoActual'),
        "descripcion_tipo_de_uso" => $this->request->getPost('descripcionTipoUso'),
        "descripcion_recurso" => $this->request->getPost('descripcionRecurso'),
        "descripcion_aprovechamiento_actual" => $this->request->getPost('descripcionAprovechamientoActual'),
        "descripcion_diseño_turistico" => $this->request->getPost('descripcionExplotacionTuristica'),
        "descripcion_intervenciones_en_turismo" => $this->request->getPost('descripcionAprovechamientoActual'),
        "descripcion_con_relacion_otros_recursos" => $this->request->getPost('descripcionRelaciónRecursos'),
        "id_pk_ubicacion " => $id_ubicacion,
        "id_pk_dueño" => $this->request->getPost('id_propietario'),
        "estado_update" => 0,
        "estado_delete" => 0,
        "fecha_registro" =>  date('Y-m-d')
    ];

    $modelo = new ModelEdificioCholet();
    $id_edificio_cholets = $modelo->insertar_datos($data_edificio);
    
    
    $data_hospedaje = [
        "alojamiento" => $this->checkbox($this->request->getPost('hospedajeAlojamiento')),
        "hotel" => $this->checkbox($this->request->getPost('hospedajeHotel')),
        "otros" => $this->checkbox($this->request->getPost('hospedajePosada')),
        "posada" => $this->checkbox($this->request->getPost('hospedajeResidencia')),
        "residencia" => $this->checkbox($this->request->getPost('hospedajeOtros')),
        "id_pk_edificio_cholet" => $id_edificio_cholets,
        "estado_update" => 0,
        "estado_delete" => 0,
        "fecha_registro" =>  date('Y-m-d')
    ];
    $modelo = new ModelHospedaje();
    $id_hospedaje = $modelo->insertar_datos($data_hospedaje);


    $data_alimentacion = [
        "pension" => $this->checkbox($this->request->getPost('alimentacionPension')),
        "cafeteria" => $this->checkbox($this->request->getPost('alimentacionCafeteria')),
        "comedor" => $this->checkbox($this->request->getPost('alimentacionComedor')),
        "restaurante" => $this->checkbox($this->request->getPost('alimentacionRestaurante')),
        "tiendas" => $this->checkbox($this->request->getPost('alimentacionTiendas')),
        "id_pk_edificio_cholet" => $id_edificio_cholets,
        "estado_update" => 0,
        "estado_delete" => 0,
        "fecha_registro" =>  date('Y-m-d')
    ];
    $modelo = new ModelServicioAlimentacion();
    $id_servicio_alimentacion = $modelo->insertar_datos($data_alimentacion);


    $data_servicios_basicos = [
        "agua_potable" => $this->checkbox($this->request->getPost('serviciosAgua')),
        "alcantarillado" => $this->checkbox($this->request->getPost('serviciosAlcantarillado')),
        "luz_electrica" => $this->checkbox($this->request->getPost('serviciosLuz')),
        "id_pk_edificio_cholet" => $id_edificio_cholets,
        "estado_update" => 0,
        "estado_delete" => 0,
        "fecha_registro" =>  date('Y-m-d')
    ];
    $modelo = new ModelServiciosBasicos();
    $id_servicio_basico = $modelo->insertar_datos($data_servicios_basicos);

    $data_climatologicos = [
        "aproximacion_minima_temperatura" => $this->request->getPost('climaTemperaturaInf'),
        "aproximacion_maxima_temperatura" => $this->request->getPost('climaTemperaturaSup'),
        "humedad_relativa" => $this->request->getPost('climaHumendad'),
        "precipitacion_fluvial" => $this->request->getPost('climaPrecipitaciónFluvial'),
        "vientos_predeterminados" => $this->request->getPost('climaVientos'),
        "id_pk_edificio_cholet" => $id_edificio_cholets,
        "estado_update" => 0,
        "estado_delete" => 0,
        "fecha_registro" =>  date('Y-m-d')
    ];

    $modelo = new ModelDatosClimatologicos();
    $id_clima = $modelo->insertar_datos($data_climatologicos);
    


    $data_climatologicos = [
        "aproximacion_minima_temperatura" => $this->request->getPost('climaTemperaturaInf'),
        "aproximacion_maxima_temperatura" => $this->request->getPost('climaTemperaturaSup'),
        "humedad_relativa" => $this->request->getPost('climaHumendad'),
        "precipitacion_fluvial" => $this->request->getPost('climaPrecipitaciónFluvial'),
        "vientos_predeterminados" => $this->request->getPost('climaVientos'),
        "id_pk_edificio_cholet" => $id_edificio_cholets,
        "estado_update" => 0,
        "estado_delete" => 0,
        "fecha_registro" =>  date('Y-m-d')
    ];
    $modelo = new ModelDatosClimatologicos();
    $id_clima = $modelo->insertar_datos($data_climatologicos);
    echo json_encode($data_climatologicos);
}

function checkbox($data){
    if($data == null){
            return 0;
    }else{
        return  1;
    }
}


public function verificar_si_existencia_propietario (){

    $id_propietario = $this->request->getPost('id_propietario');
    $modelo = new ModelEdificioCholet();
    $respuesta = $modelo->verificar_si_existe_dueño($id_propietario);

    $result = [
        "data" => $respuesta
    ];

    if(count($respuesta) != 0){
        $result ["modal"] = 1;
    } else {
        $result ["modal"] = 0;
    }
   //  $contenido = view('administracion/edificios_cholet/modal_body_registrar');
    
    echo json_encode($result);

}

}