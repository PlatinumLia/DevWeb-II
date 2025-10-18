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

    //método para inserir no banco
    public function inserir(Aluno $aluno){
        $this->alunoDao->insert($aluno); //chamando o Dao já criado
    }

    //método para deletar um registro do banco
    public function excluir(int $id){
        $this->alunoDao->exclude($id); //chamando o Dao já criado
    }
}
?>