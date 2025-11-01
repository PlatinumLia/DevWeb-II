<?php
include_once(__DIR__ . "/../dao/AlunoDao.php");
include_once(__DIR__ . "/../service/AlunoService.php");

class AlunoController{
    //atributo
    private AlunoDao $alunoDao; //atributo para o Dao
    private AlunoService $alunoService; //atributo para Service

    //construtor
    public function __construct(){ //implementando os métodos direto no construtor
        $this->alunoDao = new AlunoDao();
        $this->alunoService = new AlunoService();
    }

    //métodos
    //método para listar os alunos
    public function listar(){
        return $this->alunoDao->list();    
    }

    //método para buscar o aluno por id
    public function buscarPorId(int $id){
        return $this->alunoDao->findById($id);
    }

    //método para inserir no banco
    public function inserir(Aluno $aluno){
        //validar os dados
        $erros = $this->alunoService->validar($aluno); //"capturando" os erros
        
        if(!$erros){ //testar se há algo dentro do array de "$erros"
            $this->alunoDao->insert($aluno);
        }
        return $erros;
    }

    //método para inserir no banco
    public function editar(Aluno $aluno){
        //validar os dados
        $erros = $this->alunoService->validar($aluno); //"capturando" os erros
        
        if(!$erros){ //testar se há algo dentro do array de "$erros"
            $this->alunoDao->update($aluno);
        }
        return $erros;
    }

    //método para deletar um registro do banco
    public function excluir(int $id){
        $this->alunoDao->exclude($id); //chamando o Dao já criado
    }
}
?>