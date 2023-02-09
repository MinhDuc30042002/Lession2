<?php

namespace App\Http\Controllers;

class Controller
{
    protected $folder;

    public function render($file, $data = [])
    {
        $file_view = 'resources/views/' . $this->folder  . '/' . $file . '.php';
        ob_start();
        require_once $file_view;
        $content = ob_get_clean();
        require_once('resources/views/layout.php');
    }
}
