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

    private function obtenerTablaEmpresaConsultaSQL()
    {
        $this->db->from($this->tableEmpresa);      
        $i = 0;
        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {
                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        
        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function obtenerTablaEmpresa()
    {
        $this->obtenerTablaEmpresaConsultaSQL();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function conteoFiltradoEmpresa()
    {
        $this->obtenerTablaEmpresaConsultaSQL();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function conteTotalEmpresa()
    {
        $this->db->from($this->tableEmpresa);

        return $this->db->count_all_results();
    }
    
}