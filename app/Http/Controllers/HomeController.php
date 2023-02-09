<?php

namespace App\Http\Controllers;

use App\Http\Auth\Authentication;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->folder = 'pages';
    }

    public function index()
    {
        return $this->render('index');
    }
}
