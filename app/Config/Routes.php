<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'PrincipalWeb::index',  ['as' => 'inicio']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}




/***********public web */

$routes->get('localizacion', 'PrincipalWeb::localizacion_geo' , ['as' => 'pestaña_localizacion']);
$routes->get('noticias', 'PrincipalWeb::noticias' ,  ['as' => 'pestaña_noticias']);
$routes->get('galeria', 'PrincipalWeb::galeria',  ['as' => 'pestaña_galeria']);
$routes->get('institucion', 'PrincipalWeb::institucion',  ['as' => 'pestaña_institucion']);
$routes->get('contactos', 'PrincipalWeb::contactos',  ['as' => 'pestaña_contactos']);


/************admin_pag_web*/
$routes->get('admin', 'Login::mostrar_login',['as' => 'mostrar_login']);
$routes->post('adm', 'Login::verificar_login');  //verifica el user, pass
$routes->get('ad', 'Administracion::mostrar_menu_administracion');


