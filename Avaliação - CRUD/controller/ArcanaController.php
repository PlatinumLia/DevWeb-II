<?php
include_once(__DIR__ . "/../dao/ArcanaDao.php");

class ArcanaController{
    private ArcanaDao $arcanaDao; //chamando a classe "ArcanaDao"

    public function __construct(){ //criar novos objetos "ArcanaDao"
        $this->arcanaDao = new ArcanaDao();
    }

    public function listar(){ //método para listar as arcanas
        return $this->arcanaDao->list();
    }
}
?>