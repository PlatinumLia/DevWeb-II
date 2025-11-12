<?php
include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Arcana.php");

class ArcanaDao{
    private PDO $conn; //conexão com o banco

    public function __construct(){ //conectando ao banco
        $this->conn = Connection::getConnection();
    }

    public function list(){ //buscando a lista no DB
        $sql = "SELECT * FROM arcana ORDER BY id"; //selecionando a lista
        $stm = $this->conn->prepare($sql); //preparando
        $stm -> execute(); //executando
        $result = $stm->fetchAll();

        return $this->map($result);
    }

    private function map(array $result){ //selecionar e mostrar o objeto 
        $arcanas = array(); //armzenar em um array

        foreach($result as $r){
            $arcana = new Arcana(); //criando novo objeto
            $arcana->setId($r['id']); //setando o id
            $arcana->setNomeArc($r['nome']);// setando o nome da Arcana
            $arcana->setNumArcana($r['numero_arcana']);

            array_push($arcanas, $arcana); //adicionando ao array
        }
        return $arcanas;
    }
}
?>