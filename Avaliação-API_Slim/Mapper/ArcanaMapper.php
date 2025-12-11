<?php
namespace App\Mapper;

use App\Model\Arcana;

class ArcanaMapper{
    public function mapFromDatabaseArrayToObjectArray($regArray){
        $arrayObj = array();

        foreach($regArray as $reg){
            $regObj = $this->mapFromDatabaseArrayToObjectArray($reg);

            array_push($arrayObj, $regObj);
        }

        return $arrayObj;
    }

    public function mapFromDatabaseToObject($regDatabase){
        $obj = new Arcana();

        if(isset($regDatabase['id'])){
            $obj->setId($regDatabase['id']);
        }

        if(isset($regDatabase['nome'])){
            $obj->setId($regDatabase['nome']);
        }

        if(isset($regDatabase['numero_arcana'])){
            $obj->setId($regDatabase['numero_arcana']);
        }
    }

    public function mapFromJsonToObject($regJson){
        //reaproveita o método
        return $this->mapFromDatabaseToObject($regJson);
    }
}
?>