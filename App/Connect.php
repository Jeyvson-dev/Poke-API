<?php
namespace App;

class Connect{

    static public function getDB(){

        try {
            $conn = new \PDO('mysql:host=localhost;dbname=pokemon', 'root', '123456');
            
            return $conn;

        } catch(\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

    }

}
?>