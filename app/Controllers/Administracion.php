<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Administracion extends Controller{

    public function mostrar_menu_administracion (){
            return view ('administracion/menu');
    }
}