<?php

namespace App\Models;

use App\config\Database;
use App\Models\interfaces\UserInterface;

class User implements UserInterface
{
    protected $id;
    protected $email;
    protected $password;

    public static function all()
    {
        $db    = Database::getInstance();
        $query = "SELECT * FROM user";
        $res   = $db->query($query)->fetchAll();

        return $res;
    }

    public static function find($email)
    {
        $db    = Database::getInstance();
        $query = "SELECT * FROM user WHERE email = '$email'";
        $res   = $db->query($query);
        $user  = $res->fetch();

        return $user;
    }

    public function store($email, $password)
    {
    }

    public static function login($email, $password)
    {
        $db    = Database::getInstance();
        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $res   = $db->query($query);
        $user  = $res->fetch();

        if (isset($user['id'])) {
            return $user;
        }

        return null;
    }
}
