<?php

namespace App\Services;


class Viewer
{
    private $viewPath;
    private $parameters;

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @throws \Exception
     */
    public function render()
    {
        $this->createPath();
        echo file_get_contents($this->viewPath);
    }

    /**
     * @throws \Exception
     */
    private function createPath()
    {
        list($controller, $action) = $this->parameters;
        $viewPathString = sprintf('../src/App/Views/%s/%s.html', $controller, $action);

        if (!file_exists($viewPathString)) {
            throw new \Exception("view $viewPathString not found");
        }

        $this->viewPath = $viewPathString;
    }
}