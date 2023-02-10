<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->folder = 'user';
    }

    public function index()
    {
        return $this->render('index');
    }

    public function show($id)
    {
        echo $id;
        return $this->render('show', $id);
    }
}
