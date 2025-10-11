<?php
include_once(__DIR__ . "/../util/Connection.php"); //incluindo a classe de Conexão
include_once(__DIR__ . "/../model/Aluno.php");

class AlunoDao{
    //atributo
    private PDO $conn;

    //construtor
    public function __construct(){
        $this->conn = Connection::getConnection();
    }

    //método
    public function list(){
        $sql = "SELECT a.*, c.nome nome_curso, c.turno turno_curso 
        FROM alunos a
        JOIN cursos c ON (c.id = a.id_curso)";
        
        $stm = $this->conn->prepare($sql);
        $stm -> execute();
        $result = $stm->fetchAll();

        return $this->map($result); //passando o $result para o map()
    }

    private function map(array $result){ //conversão de array assoc. para objeto
        $alunos = array(); //guardar os objetos Aluno em um array
        
        foreach($result as $r){
            $aluno = new Aluno(); //criando o objeto aluno
            $aluno->setId($r['id']);
            $aluno->setNome($r['nome']);
            $aluno->setIdade($r['idade']);
            $aluno->setEstrangeiro($r['estrangeiro']);

            $curso = new Curso(); //criando o objeto curso para poder mostrá-lo na pág.
            $curso->setId($r['id_curso']);
            $curso->setNome($r['nome_curso']); //pegar o nome do curso
            $curso->setTurno($r['turno_curso']); 
            $aluno->setCurso($curso);

            array_push($alunos, $aluno); //guardando os objetos Alunos no array
        }
        return $alunos;
    }
}
?>