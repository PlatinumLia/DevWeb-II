<?php
include_once(__DIR__ . "/../dao/ZeladorDao.php");

class ZeladorController{
    private ZeladorDao $zeladorDao;

    //construtor
    public function __construct(){
        $this->zeladorDao = new ZeladorDao();
    }

    //métodos:
    // listar
    public function listar(){
        return $this->zeladorDao->list();
    }
}
?>