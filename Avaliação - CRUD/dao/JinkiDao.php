<?php
//incluindo a classe de conexão e a do jinki
include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Jinki.php");

class JinkiDao{
    private PDO $conn;

    //construtor para conectar ao banco
    public function __construct(){
        $this->conn = Connection::getConnection();
    }

    //métodos
    //método para listar os jinkis
    public function list(){
        $sql = "SELECT j.*, j.nome nome_jinki
                FROM jinki j";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        return $this->map($result);
    }

    private function map(array $result){ //conversão de array assoc. para objeto
        $jinkis = array();

        foreach($result as $r){
            $jinki = new Jinki(); //criando objeto "Jinki"
            $jinki->setId($r['id']);
            $jinki->setNome($r['nome']);

            array_push($jinkis, $jinki);
        }
        return $jinkis;
    }
}
?>