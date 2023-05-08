<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelEdificioCholet extends Model{
    protected $table  = 'tb_edificios_cholets';
   

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

    public function listar_edificios (){
        // $builder = $this->db->table('tb_edificios_cholets tec');
        // $builder->select('tde.nombre_dueño, tde.apellido_paterno, tde.apellido_materno, tec.nombre_edificio_cholet, tue.direccion, tde.ci, tde.celular');
        // $builder->join('tb_ubicacion_edificio tue', 'tec.id_pk_ubicacion = tue.id');
        // $builder->join('tb_dueño_edificio tde', 'tec.id_pk_dueño = tde.id');
        // $query = $builder->get(); // Ejecutar la consulta

        $query = $this->db->query(" select tde.nombre_dueño , tde.apellido_paterno , tde.apellido_materno , tec.nombre_edificio_cholet , tue.direccion , tde.ci , tde.celular 
        from tb_edificios_cholets tec 
        inner join tb_ubicacion_edificio tue on tec.id_pk_ubicacion = tue.id 
        inner join tb_dueño_edificio tde on tec.id_pk_dueño = tde.id;");      

        return $query->getResult();    
    }

}