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
        $respuesta = $modelo->insertar_datos($datos);
       //$estado = $this->db->insert('tb_dueño_edificio', $datos);
        echo json_encode($respuesta);
    }

    public function mostrar_tabla_propietarios()
    {
        $modelo = new ModelPropietario();
        $list = $modelo->obtenerTablaEmpresa();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $empresa) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $empresa->nombre_dueño;
            $row[] = $empresa->apellidos;
            $row[] = $empresa->ci;
            $row[] = $empresa->celular;
            $row[] = $empresa->correo;
            // $row[] = '';
            $row[] = '<button onclick="masDetallesEmpresa(' . $empresa->id . ')" type="button" class="btn btn-sm btn-outline-info m-0 p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver mas detalles"> <i class="bx bx-show me-1"></i></button>
            <button onclick="editarDetallesEmpresa(' . $empresa->id . ')" type="button" class="btn btn-sm btn-outline-warning m-0 p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar registro"><i class="bx bx-edit me-1"></i></button> 
            <button onclick="eliminarEmpresa(' . $empresa->id . ')"  type="button" class="btn btn-sm btn-outline-danger m-0 p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar registro"><i class="bx bx-x me-1"></i></button>  ';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $modelo->conteTotalEmpresa(),
            "recordsFiltered" => $modelo->conteoFiltradoEmpresa(),
            "data" => $data,
        );
        echo json_encode($output);
     
    }
}