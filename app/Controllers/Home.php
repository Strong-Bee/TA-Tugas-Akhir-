<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Auth/login');
    }
    
    public function register(): string
    {
        return view('Auth/signup');
    }

    public function reset_password(): string
    {
        return view('Auth/reset-password');
    }
}
