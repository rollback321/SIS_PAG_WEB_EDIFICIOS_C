<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelHospedaje extends Model{
    protected $table      = 'tb_servicio_hospedaje';

    public function insertar_datos($datos)
    {   
                $builder = $this->db->table('tb_servicio_hospedaje');
                $estado = $builder->insert($datos);
                $id_insertado = $this->db->insertID();  
    return $id_insertado; 
    }

    function listar_datos_servicio_hospedaje($id_pk_edificio)
    {
        $builder = $this->db->table('tb_servicio_hospedaje');
        $builder->select('*');
        $builder->where('id_pk_edificio_cholet',$id_pk_edificio);
        $query = $builder->get(); // Ejecutar la consulta
        return $query->getResult();
    }

}