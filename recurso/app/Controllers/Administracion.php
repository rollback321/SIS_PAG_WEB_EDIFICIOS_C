<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Session\Session;

class Administracion extends Controller{

    public function __construct()
    {
        /******** Se verifica si la sesion existe */
        $session = session();
        $this->response = \Config\Services::response();
        $this->miVariable = $session->get('nombre');
        $this->datos = [ "nombre" =>  '', "apellidos" =>  '', 'tipo_rol' => ''];
            if(!$this->miVariable){      
              return $this->response->redirect('admin');         
            } else {
              $this->datos = [
                "nombre" =>  $session->get('nombre'),
                "apellidos" =>  $session->get('apellidos'),
                'tipo_rol' => $session->get('tipo_rol')
              ];
            }
    }

    public function mostrar_menu_administracion (){
        $view = view ('administracion/menu_header',$this->datos).view ('administracion/menu_body').view ('administracion/menu_fooder');
        return $view;
    }
}