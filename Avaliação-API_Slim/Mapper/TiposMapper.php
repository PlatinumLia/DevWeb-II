<?php
namespace App\Mapper;

use App\Model\Tipos;

class TiposMapper{
    public function mapFromDatabaseArrayToObjectArray($regArray){
            $arrayObj = array();
    
            foreach($regArray as $reg){
                $regObj = $this->mapFromDatabaseArrayToObjectArray($reg);
    
                array_push($arrayObj, $regObj);
            }
    
            return $arrayObj;
        }
    
        public function mapFromDatabaseToObject($regDatabase){
            $obj = new Tipos();
    
            if(isset($regDatabase['id'])){
                $obj->setId($regDatabase['id']);
            }
    
            if(isset($regDatabase['tipo'])){
                $obj->setId($regDatabase['tipo']);
            }
        }
    
        public function mapFromJsonToObject($regJson){
            //reaproveita o método
            return $this->mapFromDatabaseToObject($regJson);
        }
}
?>