<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

$routes->group('dashboard', ['namespace' 
    => '\App\Controllers\Dashboard'], function ($routes) {
        $routes->presenter('categoria');
        $routes->presenter('subcategoria');
        $routes->presenter('marca');
        $routes->presenter('usuario');
        $routes->presenter('producto');
        
    });






