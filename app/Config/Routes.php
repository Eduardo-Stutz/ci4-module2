<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Inicio::index');
$routes->get('/clientes/novo', 'Clientes::novo');
$routes->get('/clientes', 'Clientes::index');
$routes->post('/clientes/store', 'Clientes::store');
$routes->get('/clientes/editar/(:num)', 'Clientes::editar/$1');
$routes->get('/clientes/excluir/(:num)', 'Clientes::excluir/$1');
$routes->get('/clientes/ver/(:num)', 'Clientes::ver/$1');
$routes->post('/clientes/excluir', 'Clientes::excluir/$1');