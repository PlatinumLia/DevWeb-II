<?php
include_once(__DIR__ . "/../util/Connection.php"); //incluindo a classe de Conexão
include_once(__DIR__ . "/../model/Aluno.php");

class AlunoDao
{
    //atributo
    private PDO $conn;

    //construtor
    public function __construct()
    {
        $this->conn = Connection::getConnection();
    }

    //método
    public function list()
    {
        $sql = "SELECT a.*, c.nome nome_curso, c.turno turno_curso 
                FROM alunos a
                JOIN cursos c ON (c.id = a.id_curso)";

        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        return $this->map($result); //passando o $result para o map()
    }

    private function map(array $result)
    { //conversão de array assoc. para objeto
        $alunos = array(); //guardar os objetos Aluno em um array

        foreach ($result as $r) {
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

    
    //método para inserir um aluno no sql
    public function insert(Aluno $aluno)
    {
        try { //tenta executar os comandos       
            $sql = "INSERT INTO alunos (nome, idade, estrangeiro, id_curso) VALUES (?, ?, ?, ?)";
            $stm = $this->conn->prepare($sql);
            $stm->execute(array($aluno->getNome(), $aluno->getIdade(), $aluno->getEstrangeiro(), $aluno->getCurso()->getId()));
        } catch (PDOException $e) { //caso não funcione "captura" o erro e o mostra na página
            die($e->getMessage());
        }
    }

    public function findById(int $id)
    {
        $sql = "SELECT a.*, c.nome nome_curso, c.turno turno_curso 
                FROM alunos a
                JOIN cursos c ON (c.id = a.id_curso)
                WHERE a.id = ?"; //filtrando por id

        $stm = $this->conn->prepare($sql);
        $stm->execute([$id]);
        $result = $stm->fetchAll();

        $alunos = $this->map($result);
        if (count($alunos) == 1) { //verificando se está obtendo o objeto Aluno
            return $alunos[0]; //retorna um objeto Aluno, caso exista
        }
        return NULL; //caso não haja o objeto Aluno, retorna NULL
    }
    
    public function update(Aluno $aluno)
    {
        try {
            $sql = "UPDATE alunos 
                    SET nome = ?, idade = ?, 
                        estrangeiro = ?, id_curso = ? 
                    WHERE id = ?";
            $stm = $this->conn->prepare($sql);
            $stm->execute(array(
                $aluno->getNome(),
                $aluno->getIdade(),
                $aluno->getEstrangeiro(),
                $aluno->getCurso()->getId(),
                $aluno->getId()
            ));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function exclude(int $id)
    {
        try { //tenta executar os comandos
            $sql = "DELETE FROM alunos WHERE id=?";
            $stm = $this->conn->prepare($sql);
            $stm->execute(array($id));
        } catch (PDOException $e) { //caso não funcione
            die($e->getMessage()); //mostra o erro na página
        }
    }
}
