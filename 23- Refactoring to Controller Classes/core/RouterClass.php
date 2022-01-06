<?php

class Router
{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception('HEY, THIS IS NOT A AUTO MESSAGE FROM THE BROWSER, I HAVE WRITTEN THIS MESSAGE: NO ROUTE DEFINED FOR THIS URI!!');
    }

    protected function callAction($controller, $action)
    {
        $controllerObject = new $controller;

        if (!method_exists($controllerObject, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controllerObject->$action();
    }
}
