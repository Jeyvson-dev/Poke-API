<?php
namespace App\Controller;

use App\Connect;
use MF\Model\Conexion;


use App\Model\GetPokeInfos;
use MF\Controller\Controller;

class IndexController extends Controller{


    public function index($getPokemon){

        $pokemons = Conexion::getDB('GetPokeInfos');

        $pokemon = $pokemons->getPokemon($getPokemon);

        $this->view->dados = $pokemon;

        $this->render('pokemons');

    }


}

?>