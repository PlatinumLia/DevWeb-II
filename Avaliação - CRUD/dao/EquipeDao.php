<?php
//incluindo a classe de conexão e a de equipe
include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Equipe.php");

class EquipeDao{
    private PDO $conn;

    //construtor para conectar ao banco
    public function __construct(){
        $this->conn = Connection::getConnection();
    }

    //método para buscar a lista no banco de dados
    public function list(){
        $sql = "SELECT * FROM equipe ORDER BY nome"; //selecionando a table no SQL
        $stm = $this->conn->prepare($sql); //preparando o SQL para ser executado
        $stm->execute(); //executando o SQL
        $result = $stm->fetchAll();

        return $this->map($result);
    }

    private function map(array $result){
        $equipes = array(); //armazenar os objetos em um array

        //percorrer o array "$result"
        foreach($result as $r){
            $equipe = new Equipe(); //criando um novo objeto
            $equipe->setId($r['id']);
            $equipe->setNome($r['nome']);

            //adicionando objeto no array
            array_push($equipes, $equipe);
        }
        return $equipes;
    }
}
?>