<?php

namespace App\Http\Controllers;

use App\Http\Request\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->folder = 'register';
    }

    public function index()
    {
        $request = new RegisterRequest();
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = $request->validated();

            if ($errors == []) {
                User::store($_POST['fullname'], $_POST['email'], $_POST['pw']);
                header('location: ./login');
            }
        }
        return $this->render('index', $errors);
    }
}
