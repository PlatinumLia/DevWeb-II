<?php
include_once(__DIR__ . "/../dao/CursoDao.php");

class CursoController{
    //atributo para chamar a classe "CursoDao"
    private CursoDao $cursoDao;

    //construtor para criar novo objeto "CursoDao"
    public function __construct(){
        $this->cursoDao = new CursoDao();
    }

    //método para listar os cursos
    public function listar(){
        return $this->cursoDao->list();
    }
}
?>