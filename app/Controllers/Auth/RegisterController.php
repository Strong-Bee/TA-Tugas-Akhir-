<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class RegisterController extends BaseController
{
    protected $User;

    public function __construct()
    {
        $this->User = new UserModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        return view('Auth/signup');
    }

    public function register()
    {
        $userModel = new UserModel();

        $data = [
            'name'     => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'     => 'user',
        ];

        if ($userModel->createUser($data)) {
            return redirect()->to('/')->with('success', 'Registrasi berhasil, silakan login!');
        } else {
            return redirect()->back()->with('error', 'Registrasi gagal!');
        }
    }
}
