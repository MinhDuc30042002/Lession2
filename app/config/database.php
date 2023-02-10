<?php

namespace App\config;

use PDO;
use PDOException;

class Database
{
    protected static $host = "localhost";
    protected static $db_name = "lampart";
    protected static $mysql_name = "root";
    protected static $mysql_pw = "";
    protected static $instance = NULL;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$db_name, self::$mysql_name, self::$mysql_pw);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $error) {
                die("Connection failed: " . $error->getMessage());
            }
        }

        return self::$instance;
    }
}
