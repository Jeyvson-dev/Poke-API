<?php
namespace App\Model;

use MF\Model\Model;


class GetPokeInfos extends Model{

    public function getPokemon($id){

        $sql = "
                SELECT
                    p.ID_Pokemon AS Pokemon_id,
                    p.Pokemon as Pokemon,
                    group_concat(t.type) as Types
                FROM
                    pokemon p,
                    rel_pokemon_type rpt,
                    types t
                WHERE
                    p.ID_Pokemon = rpt.ID_Pokemon
                AND
                    rpt.ID_Type = t.ID_Type
                AND
                    (p.ID_Pokemon = '$id' or p.Pokemon = '$id')
                GROUP BY
                    p.ID_Pokemon
        ";

        return $this->db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);


    }


}

?>