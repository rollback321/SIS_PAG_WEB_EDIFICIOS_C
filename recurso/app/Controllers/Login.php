<?php 
namespace App\Controllers;
use App\Models\ModelLogin;

class Login extends BaseController{

public function mostrar_login (){
    $vista = view('login/login');
    return $vista;
}

public function verificar_login (){
     
    $pass = md5($this->request->getPost('pass'));
    $user = $this->request->getPost('user');
    $model_user = new ModelLogin();
    
    $respuesta =  $model_user->verificar_usuario( $user , $pass );

    if($respuesta != "0"){
        $session = session();
        
            $datos = array(
                'nombre' => $respuesta[0]->nombre,
                'apellidos' => $respuesta[0]->apellidos,
                'tipo_rol' => $respuesta[0]->tipo_rol
            );
        $session->set($datos);
        echo json_encode($respuesta);
    } else {
        echo json_encode("0");
    }   
}


public function cerrar_sesion()
{
    $session = session();
    $session->destroy();
    return redirect()->to('admin');
}

}