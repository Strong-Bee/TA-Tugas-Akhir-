<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        //
        return view('Auth/login');
    }

    public function proseslogin()
    {
        helper(['form', 'url']);
        $session = session();

        if ($session->get('isLoggedIn')) {
            // Jika sudah login, redirect sesuai role
            $role = $session->get('role');
            switch ($role) {
                case 'superadmin':
                    return redirect()->to('/Super Admin');
                case 'admin':
                    return redirect()->to('/Admin');
                case 'karyawan':
                    return redirect()->to('/Karyawan');
                default:
                    return redirect()->to('/')->with('error', 'Role tidak valid.');
            }
        }

        if ($this->request->getMethod() === 'post') {
            $login    = $this->request->getPost('username'); // bisa username atau email
            $password = $this->request->getPost('password');

            $userModel = new \App\Models\UserModel();

            // Cari user berdasarkan username atau email
            $user = $userModel
                ->where('username', $login)
                ->orWhere('email', $login)
                ->first();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    // Set session
                    $session->set([
                        'id'    => $user['id'],
                        'username'   => $user['username'],
                        'role'       => $user['role'],
                        'isLoggedIn' => true
                    ]);

                    // Redirect berdasarkan role
                    switch ($user['role']) {
                        case 'superadmin':
                            return redirect()->to('/Super Admin');
                        case 'admin':
                            return redirect()->to('/Admin');
                        case 'karyawan':
                            return redirect()->to('/Karyawan');
                        default:
                            return redirect()->to('/')->with('error', 'Role tidak valid.');
                    }
                } else {
                    return redirect()->to('/')
                        ->withInput()
                        ->with('error', 'Password salah.');
                }
            } else {
                return redirect()->to('/')
                    ->withInput()
                    ->with('error', 'Username atau Email tidak ditemukan.');
            }
        }

        // Jika akses via GET, redirect ke login page
        return redirect()->to('/');
    }



    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
