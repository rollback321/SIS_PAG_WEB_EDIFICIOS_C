<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelServicioAlimentacion extends Model{
    protected $table      = 'tb_servicio_alimentacion';
   
    public function insertar_datos($datos)
    {   
                $builder = $this->db->table('tb_servicio_alimentacion');
                $estado = $builder->insert($datos);
                $id_insertado = $this->db->insertID();  
    return $id_insertado; 
    }


}