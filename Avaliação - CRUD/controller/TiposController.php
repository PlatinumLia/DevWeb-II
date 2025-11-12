<?php 
include_once(__DIR__ . "/../dao/TiposDao.php");

class TiposController{
    private TiposDao $tiposDao;

    public function __construct(){ //criar novos objetos "ArcanaDao"
        $this->tiposDao = new TiposDao();
    }

    public function listar(){ //método para listar as arcanas
        return $this->tiposDao->list();
    }
}
?>