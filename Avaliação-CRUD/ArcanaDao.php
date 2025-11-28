<?php
include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Arcana.php");

class ArcanaDao{
    private PDO $conn; //faz a conexão com o banco

    public function __construct(){ //conectando ao banco
        $this->conn = Connection::getConnection();
    }

    public function list(){ //listar as arcanas
        $sql = "SELECT * FROM arcana ORDER BY id"; //selecionando a tabela e dados no banco
        $stm = $this->conn->prepare($sql); //preparando o sql para ser executado
        $stm->execute(); //executando
        $result = $stm->fetchAll();

        return $this->map($result);
    }

    private function map(array $result){
        $arcanas = array(); //armazenar os objetos no array

        foreach($result as $r){ //precorrer o array "result"
            $arcana = new Arcana();
            $arcana->setId($r['id']);
            $arcana->setNomeArc($r['nome']);
            $arcana->setNumArcana($r['numero_arcana']);

            array_push($arcanas, $arcana); //adicionando o objeto no array
        }
        return $arcanas;
    }
}
?>