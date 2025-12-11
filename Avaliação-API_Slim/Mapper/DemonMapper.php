<?php
namespace App\Mapper;

use App\Model\Demon;

class DemonMapper{
    public function mapFromDatabaseArrayToObjectArray($regArray){
        $arrayObj = array();

        foreach($regArray as $reg){
            $regObj = $this->mapFromDatabaseArrayToObjectArray($reg);

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
            $obj->setId($regDatabase['nome']);
        }

        if(isset($regDatabase['preco'])){
            $obj->setId($regDatabase['preco']);
        }

        if(isset($regDatabase['id_arcana'])){
            $obj->setId($regDatabase['id_arcana']);
        }

        if(isset($regDatabase['id_tipos'])){
            $obj->setId($regDatabase['id_tipos']);
        }

        if(isset($regDatabase['id_racas'])){
            $obj->setId($regDatabase['id_racas']);
        }
    }

    public function mapFromJsonToObject($regJson){
        //reaproveita o método
        return $this->mapFromDatabaseToObject($regJson);
    }
}
?>