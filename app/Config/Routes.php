<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth\LoginController::index');
$routes->get('Register', 'Auth\RegisterController::index');
$routes->get('Reset Password', 'Auth\ResetPasswordController::index');
