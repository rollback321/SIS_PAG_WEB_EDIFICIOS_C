<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Edificio_cholet extends Controller{

public function registrar (){
    $coordenadasEdificioLatitud = $this->request->getPost('coordenadasEdificioLatitud');
    $coordenadasEdificioLonguitud = $this->request->getPost('coordenadasEdificioLonguitud');
    $sitiosReferencia = $this->request->getPost('sitiosReferencia');
    $distritoPropiedad = $this->request->getPost('distritoPropiedad');
    $direccionPropiedad = $this->request->getPost('direccionPropiedad');
    $altitudPropiedad = $this->request->getPost('altitudPropiedad');
   
    echo json_encode($coordenadasEdificioLatitud);
}


}