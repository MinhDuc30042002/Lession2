<?php

namespace App\Http\Controllers;

use App\Http\Request\LoginRequest;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->folder = 'login';
    }

    public function index()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = $this->login();

            if ($errors == []) {
                if (isset($_POST['remember'])) {
                    $email = $_POST['email'];
                    // time 6 hours
                    setcookie('c_user', $email, time() + (3600 * 6), "./");
                }
                $_SESSION['login'] = $_POST['email'];
                header('location: ./');
            }
        }

        return $this->render('index', $errors);
    }

    public function login()
    {
        $request = new LoginRequest;
        $validate = $request->validated();

        return $validate;
    }

    public function logout()
    {
        session_destroy();
        header('location: ./');
    }
}
