<?php
include_once(__DIR__ . "/../dao/EquipeDao.php");

class EquipeController{
    //atributo para chamar ao Dao
    private EquipeDao $equipeDao;

    //construtor para criar um novo objeto "EquipeDao"
    public function __construct(){
        $this->equipeDao = new EquipeDao();
    }

    //método para listar os cursos
    public function listar(){
        return $this->equipeDao->list();
    }
}
?>