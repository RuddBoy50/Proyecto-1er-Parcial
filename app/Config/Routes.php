<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Cine::cine');
$routes->post('Cine/agregarPelicula', 'Cine::agregarPelicula');

