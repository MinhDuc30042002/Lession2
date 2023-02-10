<?php
session_start();
use App\config\Database;

require_once('vendor/autoload.php');

$route = new App\Core\Router();
$conn = new Database();
