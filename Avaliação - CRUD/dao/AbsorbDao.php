<?php
include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Absorb.php");

class AbsorbDao{
    private PDO $conn; //conexão com o banco

    public function __construct(){ //conectando ao banco
        $this->conn = Connection::getConnection();
    }

    public function list(){ //buscando a lista no DB
        $sql = "SELECT * FROM absorb ORDER BY id"; //selecionando a lista
        $stm = $this->conn->prepare($sql); //preparando
        $stm -> execute(); //executando
        $result = $stm->fetchAll();

        return $this->map($result);
    }

    private function map(array $result){ //selecionar e mostrar o objeto 
        $absorbs = array(); //armzenar em um array

        foreach($result as $r){
            $absorb = new Absorb(); //criando novo objeto
            $absorb->setId($r['id']); //setando o id
            $absorb->setTipoAbs($r['tipo_abs']);// setando o tipo de absorção

            array_push($absorbs, $absorb); //adicionando ao array
        }
        return $absorbs;
    }
}
?>