<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match( [ 'get', 'post' ],'/', 'UserController::index');
$routes->match( [ 'get', 'post' ],'/register', 'UserController::register');
