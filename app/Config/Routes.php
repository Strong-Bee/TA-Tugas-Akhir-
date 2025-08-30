<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth\LoginController::index');
$routes->get('/Register', 'Auth\RegisterController::index');
$routes->get('/Reset-password', 'Auth\ResetPasswordController::index');

// Super Admin
$routes->group('Super Admin', function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('users', 'AdminController::users');
    $routes->get('reports', 'AdminController::reports');
});

// Admin
$routes->group('Admin', function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('users', 'AdminController::users');
    $routes->get('reports', 'AdminController::reports');
});

// Karyawan
$routes->group('Karyawan', function ($routes) {
    $routes->get('/', 'Karyawan\DashboardController::index');
    $routes->get('users', 'Karyawan\DashboardController::users');
    $routes->get('reports', 'Karyawan\DashboardController::reports');
});
