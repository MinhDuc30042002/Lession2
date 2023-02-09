<?php

namespace App\config;

use PDO;
use PDOException;

class Database
{
    protected $host = "localhost";
    protected $db_name = "lampart";
    protected $mysql_name = "root";
    protected $mysql_pw = "";
    protected static $instance = NULL;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                $conn = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$db_name, self::$mysql_name, self::$mysql_pw);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'OK';
            } catch (PDOException $error) {
                echo 'fail';
                die("Connection failed: " . $error->getMessage());
            }
        }

        return self::$instance;
    }
}
