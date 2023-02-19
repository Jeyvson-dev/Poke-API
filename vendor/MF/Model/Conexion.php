<?php

namespace MF\Model;

use App\Connect;

class Conexion{

    static public function getDb($model){

        $conn = Connect::getDB();

        $class = '\\App\\Model\\'.$model;

        $info = new $class($conn);

        return $info;

    }

}
?>