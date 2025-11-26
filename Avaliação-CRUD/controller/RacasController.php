<?php
include_once(__DIR__ . "/../dao/RacasDao.php");

class RacasController{
    private RacasDao $racasDao;

    public function __construct(){ //criar novos objetos "ArcanaDao"
        $this->racasDao = new RacasDao();
    }

    public function listar(){ //método para listar as arcanas
        return $this->racasDao->list();
    }
}
?>