<?php
namespace App\Mapper;

use App\Model\Arcana;
use App\Model\Demon;
use App\Model\Racas;
use App\Model\Tipos;

class DemonMapper{
    public function mapFromDatabaseArrayToObjectArray($regArray){
        $arrayObj = array();

        foreach($regArray as $reg){
            $regObj = $this->mapFromDatabaseToObject($reg);

            array_push($arrayObj, $regObj);
        }

        return $arrayObj;
    }

    public function mapFromDatabaseToObject($regDatabase){
        $obj = new Demon();

        if(isset($regDatabase['id'])){
            $obj->setId($regDatabase['id']);
        }

        if(isset($regDatabase['nome'])){
            $obj->setNome($regDatabase['nome']);
        }

        if(isset($regDatabase['preco'])){
            $obj->setPreco($regDatabase['preco']);
        }

        if(isset($regDatabase['id_arcana'])){
            $arcana = new Arcana();
            $arcana->setId($regDatabase['id_arcana']);

            if(isset($regDatabase['arcana'])){
                $arcana->setNomeArc($regDatabase['arcana']);
            }
            if(isset($regDatabase['num_arcana'])){
                $arcana->setNumArcana($regDatabase['num_arcana']);
            }

            $obj->setArcana($arcana);
        }

        if(isset($regDatabase['id_tipos'])){
            $tipos = new Tipos();
            $tipos->setId($regDatabase['id_tipos']);

            if(isset($regDatabase['fraqueza'])){
                $tipos->setTipo($regDatabase['fraqueza']);
            }

            $obj->setTipos($tipos);
        }

        if(isset($regDatabase['id_racas'])){
            $racas = new Racas();
            $racas->setId($regDatabase['id_racas']);

            if(isset($regDatabase['raca'])){
                $racas->setNome($regDatabase['raca']);
            }

            $obj->setRacas($racas);
        }

        return $obj;
    }

    public function mapFromJsonToObject($regJson){
        //reaproveita o método
        return $this->mapFromDatabaseToObject($regJson);
    }
}
?>