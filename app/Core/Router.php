<?php

namespace App\Core;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

class Router
{
    protected $params = [HomeController::class, 'index'];
    protected $routes = [
        '/login' => [LoginController::class, 'index'],
        '/logout' => [LoginController::class, 'logout'],
        '/register' => [RegisterController::class, 'index'],
        '/' => [HomeController::class, 'index']
    ];

    public function __construct()
    {
        $path_info = $_SERVER['REQUEST_URI'];

        $uri = explode('/', $path_info);
        $path = '';
        for ($i = 2; $i < count($uri); $i++) {
            $path .= '/' . $uri[$i];
        }

        // echo $path;

        if (array_key_exists($path, $this->routes)) {
            if (class_exists($this->routes[$path][0])) {
                $klass = new $this->routes[$path][0]();
                $action = $this->routes[$path][1];
                $klass->$action();
            }
        } else {
            $home = new HomeController();
            $home->index();
        };
    }

    /**
     * @param string $route
     * @param array  $params (controller, action, etc.)
     */

    static function get($route, $params = [])
    {
        return $route;
    }
}
