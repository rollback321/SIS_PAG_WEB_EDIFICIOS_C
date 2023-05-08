<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelHospedaje;

class Edificio_ServicioHospedaje extends Controller{

public function registrar_servicio_hospedaje (){
        $datos = [
          "tipo" => $this->request->getPost('hospedajeTipo'),
          "calidad_servicio" => $this->request->getPost('hospedaje_calidad'),
          "cantidad_habitantes" => $this->request->getPost('hospedajehabitaciones'),
          "id_pk_edificio_cholet" => $this->request->getPost('hospedaje_id_edificio'),
          "estado_update" => 0,
          "estado_delete" => "0",
          "fecha_registro" =>  date('Y-m-d')
        ];

        $modelo = new ModelHospedaje();
        $id_hospedaje = $modelo->insertar_datos($datos);
        $datos_html = $this->listar_datos_servicio_hospedaje($datos["id_pk_edificio_cholet"]);
       echo json_encode($datos_html);
}

public function listar_datos_servicio_hospedaje ($id_pk_edificio){
        $modelo = new ModelHospedaje();
        $datos = $modelo->listar_datos_servicio_hospedaje($id_pk_edificio);

        $t_body = "";
        foreach ($datos as $registro){
                $t_body = $t_body.'<tr>  <td>'.$registro->tipo.'</td> <td>'.$registro->calidad_servicio.'</td> <td>'.$registro->cantidad_habitantes.'</td> <td><button onclick="modificar_registro_hospedaje(' . $registro->id . ')" type="button" class="btn btn-sm btn-outline-success m-1 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar registro"><i class="fas fa-edit"></i> Editar</button>  <button onclick="ventana_confirmacion_delete_hospedaje(' . $registro->id . ')"  type="button" class="btn btn-sm btn-outline-danger m-1 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar registro"><i class="fas fa-trash-alt"></i> Eliminar</button></td>  </tr>'; 
        }

        return $t_body ;
}



}