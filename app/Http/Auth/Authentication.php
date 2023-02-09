<?php

namespace App\Http\Auth;

class Authentication
{
    public static function check() : bool
    {
        if (isset($_SESSION['login'])) return true;

        return false;
    }

    public static function user()
    {
        if (self::check()) {
            return ['name' => 'Duc'];
        }
    }
}
