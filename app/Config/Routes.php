<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth\LoginController::index');
$routes->post('Proses-Login', 'Auth\LoginController::proseslogin');

$routes->get('/Register', 'Auth\RegisterController::index');
$routes->post('proses-register', 'Auth\RegisterController::register');

$routes->get('/Reset-password', 'Auth\ResetPasswordController::index');

// halaman dashboard umum (hanya user login)
$routes->get('Karyawan', 'Dashboard::index', ['filter' => 'auth']);

// group admin
$routes->group('Admin', ['filter' => 'auth:admin'], function ($routes) {
    $routes->get('', 'Admin\Dashboard::index');
    // other admin routes
});

// group superadmin
$routes->group('Super Admin', ['filter' => 'auth:superadmin'], function ($routes) {
    $routes->get('', 'SuperAdmin\Dashboard::index');
});
