<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match( [ 'get', 'post' ],'/', 'UserController::index', [ 'filter'  =>  'noauth' ]);
$routes->match( [ 'get', 'post' ],'/register', 'UserController::register', [ 'filter'   =>  'noauth' ]);
$routes->get( '/logout', 'UserController::logout' );
$routes->get( '/dashboard', 'Dashboard::index', [ 'filter'  =>  'auth' ]);
$routes->get( '/show-all', 'Dashboard::showUsers', [ 'filter'  =>  'auth' ]);

/**
 * @since 18.09.2024
 * @author MiScapu
 * Client Front
 */
$routes->get( '/products', 'ProductController::index', [ 'filter'  =>  'auth' ] );
$routes->get( '/showproducts', 'ProductController::showProducts', [ 'filter'  =>  'auth' ] );
$routes->match( [ 'get', 'post' ], '/addproduct', 'ProductController::addProduct', [ 'filter'  =>  'auth' ] );
