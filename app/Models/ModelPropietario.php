<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelPropietario extends Model{
    protected $table      = 'tb_dueño_edificio';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    public function insertar_datos($datos)
    {

 /****** VALIDACIONES ****  */
            //modo de retorno de datos
            $estado = [
                "status"=> false,
                "data" => ""
            ];

           //Se verifica si el registro esta duplicado en ci 
           $query = $this->db->query(" SELECT count(ci) cantidad FROM tb_dueño_edificio WHERE ci = '".$datos['ci']."' ");      
           $dato_cantidad = $query->getResult();
            if(($dato_cantidad[0]->cantidad) == 0 ){


                $query = $this->db->query(" SELECT count(nombre_dueño) cantidad FROM tb_dueño_edificio WHERE ci = '".$datos['ci']."' ");      
                $dato_cantidad = $query->getResult();
                 if(($dato_cantidad[0]->cantidad) == 0 ){




                $builder = $this->db->table('tb_dueño_edificio');
                $estado = $builder->insert($datos);
                $id_insertado = $this->db->insertID();  
                $estado = [
                    "status"=> $estado,
                    "data" => $id_insertado
                ];
               
            } else {
                     $estado = [
                    "status"=> false,
                    "data" => ""
                ];
            }           

       

        return $estado; 
    }
}