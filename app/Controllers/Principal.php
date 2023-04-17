<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Principal extends BaseController
{

    /********** pestaña inicio  */
    public function index()
    {
        $vistas = view('header_fooder/header').view('header_fooder/body').view('header_fooder/fooder');
        return $vistas;
    }

     /********** pestaña localización  */
    public function localizacion_geo (){
        $vistas = view('header_fooder/header').view('localizacion_geo/localizacion_geo').view('header_fooder/fooder');
        return $vistas;
    }

      /********** pestaña noticias  */
    public function noticias (){
        $vistas = view('header_fooder/header').view('noticias/noticias').view('header_fooder/fooder');
        return $vistas;
    }

     /********** pestaña galeria  */
     public function galeria (){
        $vistas = view('header_fooder/header').view('galeria/galeria').view('header_fooder/fooder');
        return $vistas;
    }

    /********** pestaña institucion  */
    public function institucion (){
        $vistas = view('header_fooder/header').view('institucion/institucion').view('header_fooder/fooder');
        return $vistas;
    }

    /********** pestaña contactos  */
    public function contactos (){
        $vistas = view('header_fooder/header').view('contactos/contactos').view('header_fooder/fooder');
        return $vistas;
    }
}
