<?php

namespace App\Controllers\SuperAdmin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function __construct()
    {
        if (!session()->get('isLoggedIn') || session()->get('role') !== 'superadmin') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function index()
    {
        //
        return view('SuperAdmin/dashboard');
    }
}
