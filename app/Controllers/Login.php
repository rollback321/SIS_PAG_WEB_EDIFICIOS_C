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
        	// $datos=array(
							// 	'session'	=>	true,
							// 	'id'  		=>	$obj->id_usuario,
							// 	'nombres'	=>	$obj->username,
							// 	'roles'		=>	$obj->permiso,
							// 	'tema' 		=>  $obj->tema
							// );
							// $this->session->set_userdata($datos);
        echo json_encode($respuesta);
    } else {
        echo json_encode("0");
    }

    
}

}