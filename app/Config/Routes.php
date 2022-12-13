<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
 * RUTAS EN LA URL RMN
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::inicio');
$routes->get('/salir', 'Home::salir');
/* envio del formulario por post en login */
$routes->post('/login', 'Home::login');

/* prueba de p hp puro RMN */
$routes->post('/datos', 'Home::datos');



/* USUARIOS RUTAS */
$routes->get('/usuarios', 'Home::usuarios');
$routes->get('/usercrear', 'Home::usercrear');
$routes->post('/registrar', 'Home::registrar');
$routes->post('/useractualizar', 'Home::useractualizar');
$routes->post('/actualizar', 'Home::actualizar');

$routes->get('/obteneruser/(:any)', 'Home::obteneruser/$1');
$routes->get('/usereliminar/(:any)', 'Home::usereliminar/$1');




/* FIN RUTAS USUARIOS */

/* RUTAS CLIENTES */
$routes->get('/clientes', 'Asas::clientes');



/* FIN RUTAS CLIENTES */



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
