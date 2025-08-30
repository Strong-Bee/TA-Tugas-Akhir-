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
    $routes->get('/', 'SuperAdmin\DashboardController::index');
    $routes->get('users', 'SuperAdmin\DashboardController::users');
    $routes->get('reports', 'SuperAdmin\DashboardController::reports');
});

// Admin
$routes->group('Admin', function ($routes) {
    $routes->get('/', 'Admin\DashboardController::index');
    $routes->get('users', 'Admin\DashboardController::users');
    $routes->get('reports', 'Admin\DashboardController::reports');
});

// Karyawan
$routes->group('Karyawan', function ($routes) {
    $routes->get('/', 'Karyawan\DashboardController::index');
    $routes->get('users', 'Karyawan\DashboardController::users');
    $routes->get('reports', 'Karyawan\DashboardController::reports');
});
