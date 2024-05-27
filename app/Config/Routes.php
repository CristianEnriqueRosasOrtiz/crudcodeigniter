<?php

namespace Config;

use App\Controllers\Albums;
use App\Controllers\Genres;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

// Ruta por defecto
$routes->get('/', 'Albums::index');

// Rutas para el controlador de Albums
$routes->get('albums', 'Albums::index');
$routes->get('albums/create', 'Albums::create');
$routes->post('albums/store', 'Albums::store');
$routes->get('albums/edit/(:num)', 'Albums::edit/$1');
$routes->post('albums/update/(:num)', 'Albums::update/$1');
$routes->get('albums/delete/(:num)', 'Albums::delete/$1');

// Rutas para el controlador de Genres
$routes->get('genres', 'Genres::index');
$routes->get('genres/create', 'Genres::create');
$routes->post('genres/store', 'Genres::store');
$routes->get('genres/edit/(:num)', 'Genres::edit/$1');
$routes->post('genres/update/(:num)', 'Genres::update/$1');
$routes->get('genres/delete/(:num)', 'Genres::delete/$1');

// Si tienes otras configuraciones de rutas adicionales, colócalas aquí

// Archivos de configuración del framework
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

