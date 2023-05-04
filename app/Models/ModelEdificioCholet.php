<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelEdificioCholet extends Model{
    protected $table      = 'tb_edificios_cholets';
   

    public function insertar_datos($datos)
    {   
                $builder = $this->db->table('tb_edificios_cholets');
                $estado = $builder->insert($datos);
                $id_insertado = $this->db->insertID();  
        return $id_insertado; 
    }

    public function verificar_si_existe_dueño($id){
        $builder = $this->db->table('tb_edificios_cholets');
        $builder->select('*');
        $builder->where('id_pk_dueño',$id);
        $query = $builder->get(); // Ejecutar la consulta


    return $query->getResult();
    }

}