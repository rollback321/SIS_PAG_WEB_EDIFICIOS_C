<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelServiciosBasicos extends Model{
    protected $table      = 'tb_servicios_basicos';
    
    public function insertar_datos($datos)
    {   
                $builder = $this->db->table('tb_servicios_basicos');
                $estado = $builder->insert($datos);
                $id_insertado = $this->db->insertID();  
    return $id_insertado; 

    }
}