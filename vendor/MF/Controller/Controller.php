<?php
namespace MF\Controller;

abstract class Controller{

    protected $view;

    public function __construct(){
        
        $this->view = new \stdClass();

    }

    protected function render($page){

        $class = str_replace('App\\Controller\\', '',get_class($this));

        $class = str_replace('Controller', '',$class);

        require_once '../App/View/'.$class.'/'.$page.'.php';


    }
}


?>