<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultController('Students');
$routes->setDefaultController('Courses');
$routes->setDefaultController('Inscriptions');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Rutas de inicio
$routes->get('/', 'Home::index');
$routes->get('/welcome', 'Home::welcome');

//Rutas de login   
$routes->post('/login', 'Home::login');
$routes->get('/logout', 'Home::logout');

//Rutas crud estudiantes 
// $routes->resource('/students', ['controller' => 'Students']);
$routes->get('/students', 'Students::index');
$routes->get('/get-student/(:any)', 'Students::getstudent/$1');
$routes->post('/update-student', 'Students::actualizar');
$routes->get('/delete-student/(:any)', 'Students::eliminar/$1');
$routes->post('/create-student', 'Students::create');


//Rutas crud cursos
$routes->get('/courses', 'Courses::index');
$routes->get('/eliminar/(:any)', 'Courses::eliminar/$1');
$routes->post('/create-course', 'Courses::create');
$routes->get('/obtenerNombre/(:any)', 'Courses::obtenerNombre/$1');
$routes->post('/actualizar', 'Courses::actualizar');

//Rutas inscription 
$routes->get('/inscription', 'Inscriptions::index');
$routes->post('/create-inscription', 'Inscriptions::create');
$routes->get('/delete-inscription/(:any)', 'Inscription:/$1');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
