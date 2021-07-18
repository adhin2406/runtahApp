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
$routes->setDefaultController('Auth');
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
$routes->get('/', 'Auth::index', ['filter' => 'sudahlogin']);
$routes->get('/Auth', 'Auth::index', ['filter' => 'sudahlogin']);
$routes->get('/Auth/daftar', 'Auth::daftar', ['filter' => 'sudahlogin']);
$routes->get('/Auth/Login', 'Auth::login', ['filter' => 'sudahlogin']);
$routes->get('/Auth/Join', 'Auth::Join', ['filter' => 'sudahlogin']);
$routes->get('/Utama', 'Utama::index', ['filter' => 'ceklogin']);
$routes->get('Utama/Setting', 'Utama::Setting', ['filter' => 'ceklogin']);
$routes->get('Utama/Harga', 'Utama::Harga', ['filter' => 'ceklogin']);
$routes->get('Utama/detail/(:num)', 'Utama::detail/$1', ['filter' => 'ceklogin']);
$routes->get('Auth/set/(:num)', 'Auth::set/$1', ['filter' => 'ceklogin']);
$routes->get('Utama/chekout', 'Utama::chekout', ['filter' => 'ceklogin']);
$routes->get('Utama/bantuan', 'Utama::bantuan', ['filter' => 'ceklogin']);
$routes->get('Utama/Tarik', 'Utama::Tarik', ['filter' => 'ceklogin']);
$routes->get('Utama/keranjang', 'Utama::keranjang', ['filter' => 'ceklogin']);
$routes->get('Utama/Konfirmasi/(:num)', 'Utama::konfirmasi/$1', ['filter' => 'ceklogin']);

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
