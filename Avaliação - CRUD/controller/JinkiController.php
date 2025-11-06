<?php
include_once(__DIR__ . "/../dao/JinkiDao.php");

class JinkiController{
    private JinkiDao $jinkiDao;

    //construtor
    public function __construct(){
        $this->jinkiDao = new JinkiDao();
    }

    //métodos:
    // listar os jinkis
    public function listar(){
        return $this->jinkiDao->list();
    }
}
?>