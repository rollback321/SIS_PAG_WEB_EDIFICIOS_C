<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelPropietario;

class Propietario extends Controller{

    public function registrar(){
        
        $ci = $this->request->getPost('ciPropietario');
        $exp = $this->request->getPost('expPropietario');
        $complementoCi =  $this->request->getPost('ciComplemento');
     //   $complemento = $this->request->getPost('complementoPropietario');
     
     if( $complementoCi == "Sin compl." ){
        
        if($exp != "SIN EXP."){
            $ci = $ci.",".$exp;
        } else {
            $ci = $ci;
        }
     } else {
        $ci = $ci."".$complementoCi;
        if($exp != "SIN EXP."){
            $ci = $ci.",".$exp;
        }
     }   

        $datos = [
            "nombre_dueño" =>   trim(strtoupper($this->request->getPost('nombrePropietario'))),
            "apellido_paterno" => trim(strtoupper($this->request->getPost('apellidoPaternoPropietario'))),
            "apellido_materno" => trim(strtoupper($this->request->getPost('apellidoMaternoPropietario'))),
            "otro_apellido" => trim(strtoupper($this->request->getPost('OtroapellidoPropietario'))),
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

   

    public function listar_datos_dueño()
    {
        $modelo = new ModelPropietario();
        $respuesta = $modelo->model_listar_registros_propietario();
        $data = array();
        $no = 0;
        $apellidos = "";
         foreach ($respuesta as $propietario) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $propietario->nombre_dueño;

            if( $propietario->otro_apellido != ""){
                $apellidos = $propietario->apellido_paterno." ".$propietario->apellido_materno." de ".$propietario->otro_apellido;
            } else {
                $apellidos = $propietario->apellido_paterno." ".$propietario->apellido_materno;
            }

            $row[] = $apellidos;
            $row[] = $propietario->ci;
            $row[] = $propietario->celular;
            $row[] = $propietario->correo;
            // $row[] = '';
            $row[] = '<button onclick="verEdificios(' . $propietario->id . ')" type="button" class="btn btn-sm btn-outline-info m-1 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver mas detalles"><i class="fas fa-eye"></i> ver edificios </button>
                <button onclick="modificar_registro(' . $propietario->id . ')" type="button" class="btn btn-sm btn-outline-warning m-1 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar registro"><i class="fas fa-edit"></i> Editar</button> 
               <button onclick="ventana_confirmacion_delete (' . $propietario->id . ')"  type="button" class="btn btn-sm btn-outline-danger m-1 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar registro"><i class="fas fa-trash-alt"></i> Eliminar</button> ';
            $data[] = $row;
            $apellidos = "";
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

    $ci = $this->request->getPost('ciPropietario_modificar');
        $exp = $this->request->getPost('expPropietario_modificar');
        $complementoCi =  $this->request->getPost('ciComplemento_modificar');
     //   $complemento = $this->request->getPost('complementoPropietario');
     
     if( $complementoCi == "Sin compl." ){
        
        if($exp != "SIN EXP."){
            $ci = $ci.",".$exp;
        } else {
            $ci = $ci;
        }
     } else {
        $ci = $ci."".$complementoCi;
        if($exp != "SIN EXP."){
            $ci = $ci.",".$exp;
        }
     }   

    $datos = array(
        "nombre_dueño" =>   trim(strtoupper($this->request->getPost('nombrePropietario_modificar'))),
        "apellido_paterno" => trim(strtoupper($this->request->getPost('apellidoPaternoPropietario_modificar'))),
        "apellido_materno" => trim(strtoupper($this->request->getPost('apellidoMaternoPropietario_modificar'))),
        "otro_apellido" => trim(strtoupper($this->request->getPost('OtroapellidoPropietario_modificar'))),
        "ci" =>     $ci,
        "celular" => $this->request->getPost('celPropietario_modificar'),
        "correo" => $this->request->getPost('emailPropietario_modificar')    
    );

    //echo "<script> console.log(".$datos.") </script>";

   $modelo = new ModelPropietario();
   $respuesta = $modelo->modificar_registro_propietario($datos,$id);
    echo json_encode($respuesta);
  //  echo json_encode($datos);
}





}