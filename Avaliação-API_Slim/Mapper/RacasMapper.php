<?php
namespace App\Mapper;

use App\Model\Racas;

class RacasMapper{
    public function mapFromDatabaseArrayToObjectArray($regArray){
        $arrayObj = array();

        foreach($regArray as $reg){
            $regObj = $this->mapFromDatabaseArrayToObjectArray($reg);

            array_push($arrayObj, $regObj);
        }

        return $arrayObj;
    }

    public function mapFromDatabaseToObject($regDatabase){
        $obj = new Racas();

        if(isset($regDatabase['id'])){
            $obj->setId($regDatabase['id']);
        }

        if(isset($regDatabase['nome'])){
            $obj->setId($regDatabase['nome']);
        }
    }

    public function mapFromJsonToObject($regJson){
        //reaproveita o método
        return $this->mapFromDatabaseToObject($regJson);
    }
}
?>