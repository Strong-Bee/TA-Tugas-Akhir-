<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function __construct()
    {
        if (!session()->get('isLoggedIn') || session()->get('role') !== 'admin') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function index()
    {
        //
        return view('Admin/dashboard');
    }
}
