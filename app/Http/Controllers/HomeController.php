<?php

namespace App\Http\Controllers;

use App\Http\Auth\Authentication;
use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->folder = 'pages';
    }

    public function index()
    {
        if (isset($_SESSION['login'])) {
            $user = User::find($_SESSION['login']);
        }
        $list = User::all();
        return $this->render('index', ['user' => @$user, 'list' => $list]);
    }
}
