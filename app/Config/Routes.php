<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match( [ 'get', 'post' ],'/', 'UserController::index', [ 'filter'  =>  'noauth' ]);
$routes->match( [ 'get', 'post' ],'/register', 'UserController::register', [ 'filter'   =>  'noauth' ]);
$routes->get( '/logout', 'UserController::logout' );
$routes->get( '/dashboard', 'Dashboard::index', [ 'filter'  =>  'auth' ]);
