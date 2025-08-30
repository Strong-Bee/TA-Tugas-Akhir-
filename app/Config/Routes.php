<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Register', 'Home::register');
$routes->get('Reset Password', 'Home::reset_password');
