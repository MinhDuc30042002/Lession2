<?php

namespace App\Models\interfaces;

interface UserInterface
{
    /**
     * return list data user
     */

    public static function all();

    /**
     * Find a user by email
     * @param string $email
     * 
     * @return a user by email
     */

    public static function find($email);

    /**
     * Store a new user
     * @param string $email
     * @param string $password
     */

    public function store($email, $password);

    /**
     * @param string $email
     * @param string $password
     */

    public static function login($email, $password);
}
