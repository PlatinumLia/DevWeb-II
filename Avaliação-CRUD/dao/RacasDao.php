<?php
include_once(__DIR__ . "/../model/Racas.php");

class RacasDao{
    private PDO $conn; //faz a conexão com o banco

    public function __construct()
    { //conectando ao banco
        $this->conn = Connection::getConnection();
    }

    public function list(){ //listar as arcanas
        $sql = "SELECT * FROM racas ORDER BY id"; //selecionando a tabela e dados no banco
        $stm = $this->conn->prepare($sql); //preparando o sql para ser executado
        $stm->execute(); //executando
        $result = $stm->fetchAll();

        return $this->map($result);
    }

    private function map(array $result){
        $racas = array(); //armazenar os objetos no array

        foreach($result as $r){ //precorrer o array "result"
            $raca = new Racas();
            $raca->setId($r['id']);
            $raca->setNome($r['nome']);
            array_push($racas, $raca); //adicionando o objeto no array
        }
        return $racas;
    }
}
