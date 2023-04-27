<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelPropietario;

class Propietario extends Controller{

    public function registrar(){
        
        $ci = $this->request->getPost('ciPropietario');
        $exp = $this->request->getPost('expPropietario');
     //   $complemento = $this->request->getPost('complementoPropietario');
     
        if($exp != "SIN EXP."){
            $ci = $ci."-".$exp;
        }


        $datos = [
            "nombre_dueño" =>   trim(strtoupper($this->request->getPost('nombrePropietario'))),
            "apellidos" => trim(strtoupper($this->request->getPost('apellidosPropietario'))),
            "ci" =>     $ci,
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

    public function eliminar_registro()
    {
        $id = $this->request->getPost("id_propietario");
        $modelo = new ModelPropietario();
        $respuesta = $modelo->eliminar_registro_propietario($id);
        
        echo json_encode($respuesta."  ID:".$id);
    
        // Redirige a la página principal o a la vista de la lista de registros
      
    }

    public function mostrar_tabla_propietarios()
    {
        $modelo = new ModelPropietario();
        $respuesta = $modelo->pruebita();
        $data = array();
        $no = 0;

      // print_r($list);
        foreach ($respuesta as $propietario) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $propietario->nombre_dueño;
            $row[] = $propietario->apellidos;
            $row[] = $propietario->ci;
            $row[] = $propietario->celular;
            $row[] = $propietario->correo;
            // $row[] = '';
            $row[] = '<button onclick="masDetallesEmpresa(' . $propietario->id . ')" type="button" class="btn btn-sm btn-outline-info m-1 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver mas detalles"><i class="fas fa-eye"></i> ver </button>
                <button onclick="editarDetallesEmpresa(' . $propietario->id . ')" type="button" class="btn btn-sm btn-outline-warning m-0 p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar registro"><i class="fas fa-edit"></i> Editar</button> 
            <button onclick="eliminar_registro()"  type="button" class="btn btn-sm btn-outline-danger m-0 p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar registro"><i class="fas fa-trash-alt"></i> Eliminar</button> ';
            $data[] = $row;
        }

        $output = array(
           
            "data" => $data,
        );
        echo json_encode($output);
     
    }

    public function listar_datos_dueño()
    {
        $modelo = new ModelPropietario();
        $respuesta = $modelo->model_listar_registros_propietario();
        $data = array();
        $no = 0;
         foreach ($respuesta as $propietario) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $propietario->nombre_dueño;
            $row[] = $propietario->apellidos;
            $row[] = $propietario->ci;
            $row[] = $propietario->celular;
            $row[] = $propietario->correo;
            // $row[] = '';
            $row[] = '<button onclick="masDetallesEmpresa(' . $propietario->id . ')" type="button" class="btn btn-sm btn-outline-info m-1 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver mas detalles"><i class="fas fa-eye"></i> ver edificios </button>
                <button onclick="modificar_registro(' . $propietario->id . ')" type="button" class="btn btn-sm btn-outline-warning m-1 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar registro"><i class="fas fa-edit"></i> Editar</button> 
               <button onclick="ventana_confirmacion_delete (' . $propietario->id . ')"  type="button" class="btn btn-sm btn-outline-danger m-1 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar registro"><i class="fas fa-trash-alt"></i> Eliminar</button> ';
            $data[] = $row;
        }

        echo json_encode(array("data" => $data));
        // var_dump($respuesta);
    }

public function listar_registro_a_modificar(){
    $id = $this->request->getPost("id_propietario");
    $modelo = new ModelPropietario();
    $respuesta = $modelo->listar_registro_a_modificar_model($id);
    echo json_encode($respuesta);
}

public function modificar_registro(){
    $id = $this->request->getPost('id_propietario_modificar');
    $datos = array(
        "nombre_dueño" =>   trim(strtoupper($this->request->getPost('nombrePropietario_modificar'))),
        "apellidos" =>  trim(strtoupper($this->request->getPost('apellidosPropietario_modificar'))),
        "ci" => $this->request->getPost('ciPropietario_modificar'),
        "celular" => $this->request->getPost('celPropietario_modificar'),
        "correo" => $this->request->getPost('emailPropietario_modificar'),
    );

   $modelo = new ModelPropietario();
   $respuesta = $modelo->modificar_registro_propietario($datos,$id);
    echo json_encode($respuesta);
}

}