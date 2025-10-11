<?php
include_once(__DIR__ . "/../dao/AlunoDao.php");

class AlunoController{
    //atributo
    private AlunoDao $alunoDao;

    //construtor
    public function __construct(){
        $this->alunoDao = new AlunoDao();
    }

    //método
    public function listar(){
        return $this->alunoDao->list();    
    }
}
?>