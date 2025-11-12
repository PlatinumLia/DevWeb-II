<?php
include_once(__DIR__ . "/../dao/ArcanaDao.php");

class ArcanaController{
    private ArcanaDao $arcanaDao;

    //método para criar um novo objeto "ArcanaDao"
    public function __construct(){
        $this->arcanaDao = new ArcanaDao();
    }

    //método para listar os elementos da tabela "Arcana"
    public function listar(){
        return $this->arcanaDao->list();
    }
}
?>