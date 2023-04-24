<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelPropietario;

class Propietario extends Controller{

    public function registrar(){
        
        $datos = [
            "nombre_dueño" =>   $this->request->getPost('nombrePropietario'),
            "apellidos" => $this->request->getPost('apellidosPropietario'),
            "ci" => $this->request->getPost('ciPropietario'),
            "celular" => $this->request->getPost('celPropietario'),
            "correo" => $this->request->getPost('emailPropietario'),
            "estado_update" => 0,
            "estado_delete" => "0",
            "fecha_registro" =>  date('Y-m-d')
        ];

        $modelo = new ModelPropietario();
        $id_insertado = $modelo->insertar_datos($datos);
       //$estado = $this->db->insert('tb_dueño_edificio', $datos);
        echo json_encode($id_insertado);
    }

}