<?php
namespace router;

class router
    {
    public $routes = [];
    public function add($method, $path, $handle)
        {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'handle' => $handle
        ];
        }
    public function solve()
        {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestPath = str_replace(BASE_URL, "", $requestPath);

        foreach ($this->routes as $route) {
            if ($route['method'] == $requestMethod && $route['path'] == $requestPath) {
                list($controllers, $method) = explode("@", $route['handle']);
                $controllers = "controllers\\$controllers";
                call_user_func_array([new $controllers, $method], []);
                return;
                }
            }


        }
    }
