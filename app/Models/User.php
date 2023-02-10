<?php

namespace App\Models;

use App\config\Database;
use App\Models\interfaces\UserInterface;

class User implements UserInterface
{
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

    public static function store($fullname, $email, $password)
    {
        $db    = Database::getInstance();
        $query = "INSERT INTO user (email, password, fullname) VALUES ('$email', md5($password), '$fullname')";
        $res   = $db->prepare($query)->execute();

        return $res;
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
