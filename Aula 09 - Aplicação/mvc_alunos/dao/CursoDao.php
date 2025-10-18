<?php
//incluindo o arquivo de conexão e a classe "Curso"
include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Curso.php");

class CursoDao{
    //atributo par fazer a conexão com o banco
    private PDO $conn;

    //construtor para conectar ao banco
    public function __construct(){
        $this->conn = Connection::getConnection();
    } 
    
    //método para buscar a lista no banco de dados
    public function list(){
        $sql = "SELECT * FROM cursos ORDER BY nome"; //selecionando a tabela no SQL
        $stm = $this->conn->prepare($sql); //preparando o sql
        $stm -> execute();
        $result = $stm->fetchAll();

        return $this->map($result);
    }

    //método para mostrar como objeto
    private function map(array $result){
        $cursos = array(); //armazenar os objetos em um array

        //percorrer o array "$result"
        foreach($result as $r){
            $curso = new Curso(); //criando objeto
            $curso->setId($r['id']); //setando o Id do objeto
            $curso->setNome(($r['nome']));
            $curso->setTurno($r['turno']);

            //adicionando o objeto no array
            array_push($cursos, $curso);
        }

        return $cursos;
    } 
}
?>