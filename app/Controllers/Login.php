<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller{

public function mostrar_login (){

$vista = view('login/login');

return $vista;

}

public function verificar_login (){

}

}