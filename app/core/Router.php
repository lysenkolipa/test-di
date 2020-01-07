<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];


    public function __construct()
    {
        $array = require 'app/configs/routes.php';
        foreach ($array as $key => $value) {
            $this->addRoute($key, $value);
        }
    }

    public function addRoute($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }
    public function matchRoute() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        var_dump($url);
//        var_dump($this->routes);
        foreach($this->routes as $route => $params) {
            if( preg_match($route, $url, $matches) ){
                $this->params = $params;
                return true;
            }
        }
        return false;
    }
    public function runRouter() {
        if($this->matchRoute()){

        }
    }
}