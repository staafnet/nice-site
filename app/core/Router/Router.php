<?php

class Router
{
    protected $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function route()
    {
        $url = isset ($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';

        if (array_key_exists($url, $this->routes)) {
            $action = $this->routes[$url];
            $this->executeAction($action);
        } else {
            $this->notFound($url);
        }
    }

    protected function executeAction($action)
    {
        list($controllerName, $method) = explode('@', $action);
        $controllerClassName = ucfirst($controllerName) . 'Controller';
        $controllerFile = '../app/controllers/' . $controllerClassName . '.php';

        if (!file_exists($controllerFile)) {
            $this->notFound("Controller file '$controllerFile' does not exist");
        }

        include_once ($controllerFile);

        $controller = new $controllerClassName();

        if (!method_exists($controller, $method)) {
            $this->notFound("Method '$method' not found in controller '$controllerClassName'");
        }

        $controller->$method();
    }

    protected function notFound($message)
    {
        http_response_code(404);
        echo "404 Not Found: $message";
        exit;
    }
}

?>