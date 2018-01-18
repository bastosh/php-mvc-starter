<?php

namespace App\Services;

class Dispatcher
{
    private $parameters;
    private $viewer;

    public function __construct()
    {
        $this->parameters = $_GET;
        $this->viewer = new Viewer();
    }

    public function dispatch()
    {
        $parameters = $this->extractControllerAndActionParameters();
        $this->viewer->setParameters($parameters)->render();

    }

    private function extractControllerAndActionParameters()
    {
        if(isset($this->parameters['controller']) && isset($this->parameters['action'])) {
            $controller = $this->parameters['controller'];
            $action     = $this->parameters['action'];
        } else {
            $controller = DEFAULT_CONTROLLER;
            $action     = DEFAULT_ACTION;
        }
        return array($controller, $action);
    }
}