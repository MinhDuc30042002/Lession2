<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->folder = 'login';
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
        }

        return $this->render('index');
    }

    public function login()
    {
        if (in_array("", $_POST)) {
            var_dump($_POST);
            echo 'B';
        } else {
            var_dump($_POST);
            echo 'C';
        }
    }
}
