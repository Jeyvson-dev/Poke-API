<?php
namespace MF;

abstract class Bootstrap{

    private $routes;

    abstract public function initRoutes();

    public function __construct(){

        $this->initRoutes();

        $this->run($this->getUrl());
     
    }

    public function getUrl(){

        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    }

    public function getIdPokemon(){

        $url = $this->getUrl();

        $url = explode("public/", $url);

        return $url[1];

    }

    public function run($url){

        foreach ($this->getRoutes() as $key => $value) {

            if($url == $value['route']){

                $class = '\\App\\Controller\\'.ucfirst($value['controller']);
                
                $controller = new $class;

                $action = $value['action'];

                $controller->$action($this->getIdPokemon());

            }
        }
    }

    public function getRoutes()
    {
        return $this->routes;
    } 
    public function setRoutes($routes)
    {
        $this->routes = $routes;

        return $this;
    }
}
?>