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


    
    var $tableEmpresa = 'tb_dueño_edificio';
    var $column_order = array(null, 'nombre_dueño', 'apellidos', 'ci', 'celular', 'correo'); //set column field database for datatable orderable
    var $column_search = array('nombre_dueño', 'apellidos', 'ci', 'celular', 'correo'); //set column field database for datatable searchable 
    var $order = array('id' => 'desc'); // default order 

    function listar_datos_dueño_propiedad()
    {
        $builder = $this->db->table('tb_dueño_edificio');
        $builder->select('nombre_dueño , apellidos , ci');
        $query = $builder->get(); // Ejecutar la consulta
        return $query->getResult();
    }

    private function obtenerTablaEmpresaConsultaSQL()
    {
        $builder = $this->db->table($this->tableEmpresa);
    
        $i = 0;
        $search_value = $this->request->getPost('search')['value'];
        $builder->groupStart();
        foreach ($this->column_search as $item) {
            if (!empty($search_value)) {
                if ($i === 0) {
                    $builder->like($item, $search_value);
                } else {
                    $builder->orLike($item, $search_value);
                }
            }
            $i++;
        }
        $builder->groupEnd();
    
        $order_column_index = $this->request->getPost('order')[0]['column'] ?? null;
        if ($order_column_index !== null) {
            $order_column = $this->column_order[$order_column_index];
            $order_direction = $this->request->getPost('order')[0]['dir'];
            $builder->orderBy($order_column, $order_direction);
        } else if (isset($this->order)) {
            $builder->orderBy(key($this->order), $this->order[key($this->order)]);
        }
    
        $builder->limit($this->request->getPost('length'), $this->request->getPost('start'));
        return $builder;
    }

    function obtenerTablaEmpresa()
    {
        $builder = $this->obtenerTablaEmpresaConsultaSQL();
        if ($this->request->getPost('length') != -1) {
            $builder->limit($this->request->getPost('length'), $this->request->getPost('start'));
        }
        $query = $builder->get();
        return $query->getResult();
    }

    function conteoFiltradoEmpresa()
    {
        $builder = $this->obtenerTablaEmpresaConsultaSQL();
        return $builder->countAllResults(); 
    }

    public function conteTotalEmpresa()
    {
        $builder = $this->db->table($this->tableEmpresa);
        return $builder->countAll();
    }

    function model_listar_registros_propietario()
    {
        $builder = $this->db->table('tb_dueño_edificio');
        $builder->select('id, nombre_dueño , apellido_paterno , apellido_materno , otro_apellido , ci, celular, correo, fecha_registro');
        $builder->where('estado_delete',"0");
        $query = $builder->get(); // Ejecutar la consulta
        return $query->getResult();
    }
 
    public function eliminar_registro_propietario($id)
    {
        // Elimina el registro con el ID dado
        // $builder = $this->db->table('tb_dueño_edificio');
        // $builder->where('id', $id);
        // $estado = $builder->delete();

        $builder = $this->db->table('tb_dueño_edificio');
        $builder->where('id', $id);
        $datos = array(
            'estado_delete' => '1'
        );
        $builder->update($datos);

        $estado = "true";
        return $estado;
    }

public function listar_registro_a_modificar_model($id){
    $builder = $this->db->table('tb_dueño_edificio');
    $builder->select('id, nombre_dueño , apellido_paterno , apellido_materno , otro_apellido , ci, celular, correo');
    $builder->where('id',$id);
    $query = $builder->get(); // Ejecutar la consulta
    return $query->getResult();
}

public function modificar_registro_propietario($datos,$id)
{

    
    /******** Se obtiene el estado_update, para incrementarlo en 1 dado que se esta 
     *********realizando los cambios a la tabla  */
    $builder = $this->db->table('tb_dueño_edificio');
    $builder->select('estado_update');
    $builder->where('id',$id);
    $query = $builder->get(); // Ejecutar la consulta
    $dato_estado_update = $query->getResult();

    /******** Se incorpora el estado_update incrementado en 1, al array datos para 
     * ****** su respectiva modificación*/
    $dat = $dato_estado_update[0];
    $datos["estado_update"] = ($dat->estado_update)+1;

    /******** Se ejecuta la clausula update a la tabla correspondiente */
   $builder = $this->db->table('tb_dueño_edificio');
   $builder->where('id', $id);
   $builder->update($datos);

   /********* Se utiliza un dato vacio para retornar el valor, dado que si
    * ******* no se retorna ningun dado esta brinda un error de servidor*/
   $return_data = [];
   return $return_data;
}




   }