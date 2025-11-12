<?php
include_once(__DIR__ . "/../dao/AbsorbDao.php");

class AbsorbController{
    private AbsorbDao $absorbDao;

    //método para criar um novo objeto "AbsorbDao"
    public function __construct(){
        $this->absorbDao = new AbsorbDao();
    }

    //método para listar os elementos de absorção
    public function listar(){
        return $this->absorbDao->list();
    }
}
?>