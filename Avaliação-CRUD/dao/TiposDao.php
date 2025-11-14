<?php
include_once(__DIR__ . "/../model/Tipos.php");

class TiposDao{
    private PDO $conn; //faz a conexão com o banco

    public function __construct(){ //conectando ao banco
        $this->conn = Connection::getConnection();
    }

    public function list(){ //listar as arcanas
        $sql = "SELECT * FROM tipos ORDER BY id"; //selecionando a tabela e dados no banco
        $stm = $this->conn->prepare($sql); //preparando o sql para ser executado
        $stm->execute(); //executando
        $result = $stm->fetchAll();

        return $this->map($result);
    }

    private function map(array $result){
        $tipos = array(); //armazenar os objetos no array

        foreach($result as $r){ //precorrer o array "result"
            $tipo = new Tipos();
            $tipo->setId($r['id']);
            $tipo->setTipo($r['tipo']);
            array_push($tipos, $tipo); //adicionando o objeto no array
        }
        return $tipos;
    }
}
?>