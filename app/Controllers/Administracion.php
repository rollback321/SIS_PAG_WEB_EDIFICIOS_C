<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Administracion extends Controller{

    public function __construct()
    {
        // Aquí puedes inicializar cualquier propiedad o variable que necesites
        // Por ejemplo:
       
        $this->miVariable = "Hola, mundo!";
    }

    public function mostrar_menu_administracion (){

        // $view = view ('administracion/menu_header').view ('administracion/menu_body').view ('administracion/menu_fooder');

      echo "prueba  ".$this->miVariable;

           // return $view;
    }
}