<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model{
    protected $table      = 'tb_administrador_sistema';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    public function verificar_usuario ($user,$pass){

        $builder = $this->db->table('tb_administrador_sistema ad');
        $builder->select('ad.nombre, ad.apellidos');
        $builder->join('tb_rol rl', 'ad.id_pk_rol = rl.id');
        $builder->where('ad.usuario', $user);
        $builder->where('ad.contraseña', $pass);

        $query = $builder->get(); // Ejecutar la consulta
        
/******** Se verifica si hay datos */        
        if($query->getNumRows()>0){
            return $query->getResult(); 
        } else {
            return "0";
        }
    }
}