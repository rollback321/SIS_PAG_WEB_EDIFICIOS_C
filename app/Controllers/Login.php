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
            // Añadir un array con datos a la sesión
            $datos = array(
                'nombre' => $respuesta[0]->nombre,
                'apellidos' => $respuesta[1]->apellidos,
                'tipo_rol' => $respuesta[2]->tipo_rol
            );
        $session->set($datos);

        echo json_encode($respuesta);
    } else {
        echo json_encode("0");
    }

    
}

}