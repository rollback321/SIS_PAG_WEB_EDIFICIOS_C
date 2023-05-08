<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelDatosClimatologicos extends Model{
    protected $table      = 'tb_datos_climatologicos';
    
    public function insertar_datos($datos)
    {   
                $builder = $this->db->table('tb_datos_climatologicos');
                $estado = $builder->insert($datos);
                $id_insertado = $this->db->insertID();  
    return $id_insertado; 

    }


}