<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ResetPasswordController extends BaseController
{
    public function index()
    {
        //
        return view('Auth/reset-password');
    }
}
