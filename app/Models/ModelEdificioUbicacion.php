<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelEdificioUbicacion extends Model{
    protected $table      = 'tb_ubicacion_edificio';
    

    public function insertar_datos($datos)
    {

      
                $builder = $this->db->table('tb_ubicacion_edificio');
                $estado = $builder->insert($datos);
             $id_insertado = $this->db->insertID();  
                 

       

        return $id_insertado; 
    }

}