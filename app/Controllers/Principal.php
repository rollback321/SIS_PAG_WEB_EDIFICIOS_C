<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Principal extends BaseController
{
    protected $load;
    public function index()
    {
        
     //   $cabezera = view('index').view('index2');
        echo sumar(4,6);
        return $cabezera;
     
    }
}
