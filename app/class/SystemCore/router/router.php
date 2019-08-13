<?php

namespace SystemCore;

class Router {

    private $url;
    private $routes = [];
    private $namedRoutes = [];

    public function __construct($url){
        $this->url      = $url;
    }

    public function get($path, $callable, $name = null){
        return $this->add($path, $callable, $name, 'GET');
    }

    public function post($path, $callable, $name = null){
        return $this->add($path, $callable, $name, 'POST');
    }

    private function add($path, $callable, $name, $method){
        $route = new \SystemCore\Route($path, $callable);
        $this->routes[$method][] = $route;
        if(is_string($callable) && $name === null){
            $name = $callable;
        }
        if($name){
            $this->namedRoutes[$name] = $route;
        }
        return $route;
    }

    public function run(){
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            require realpath(__DIR__ . '/../../..') . '/autoload.php';
            require realpath(__DIR__ . '/../../..') . '/views/errors/404.php';
        }
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if($route->match($this->url)){
                return $route->call();
            }
        }
        require realpath(__DIR__ . '/../../..') . '/autoload.php';
        require realpath(__DIR__ . '/../../..') . '/views/errors/404.php';
    }

    public function url($name, $params = []){
        if(!isset($this->namedRoutes[$name])){
            require realpath(__DIR__ . '/../../..') . '/autoload.php';
            require realpath(__DIR__ . '/../../..') . '/views/errors/404.php';
        }
        return $this->namedRoutes[$name]->getUrl($params);
    }

}

?>