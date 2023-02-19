<?php
namespace App;
use MF\Bootstrap;

class Route extends Bootstrap{

    public function initRoutes(){

            $routes['pokemon'] = array(

                'route' => '/APIPokemon/public/'.$this->getIdPokemon(),
                'controller' => 'indexController',
                'action' => 'index'
        
            );

            $this->setRoutes($routes);
    }
}


?>