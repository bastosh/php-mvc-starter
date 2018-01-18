<?php

namespace App\Services;

class Dispatcher
{
    private $parameters;

    public function __construct()
    {
        $this->parameters = $_GET;
    }

    public function dispatch()
    {
        $controller = $this->parameters['controller'];
        $action     = $this->parameters['action'];
        $viewPath   = sprintf('../src/App/Views/%s/%s.html', $controller, $action);

        if (!file_exists($viewPath)) {
            throw new \Exception("view $viewPath not found");
        }
        echo file_get_contents($viewPath);
    }
}