<?php
namespace App\Dao;

use App\Util\Connection;
use App\Mapper\TiposMapper;
use App\Model\Tipos;

use \Exception;

class TiposDao{
    private $conn; //faz a conexão com o banco
    private $tiposMapper;

    public function __construct(){ //conectando ao banco
        $this->conn = Connection::getConnection();
        $this->tiposMapper = new TiposMapper();
    }

    public function list(){ //listar as arcanas
        $sql = "SELECT * FROM tipos ORDER BY id"; //selecionando a tabela e dados no banco
        $stm = $this->conn->prepare($sql); //preparando o sql para ser executado
        $stm->execute(); //executando
        $result = $stm->fetchAll();

        return $this->tiposMapper->mapFromDatabaseArrayToObjectArray($result);
    }

    public function findById(int $id) {
        $sql = 'SELECT * FROM tipos WHERE id = :id';

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue("id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $arrayObj = $this->tiposMapper->mapFromDatabaseArrayToObjectArray($result);

        if(count($arrayObj) == 0){
            return null;
        }else if(count($arrayObj) > 1){
            new Exception("Mais de um registro encontrado para o ID " . $id);
        }else{ //count($arrayObj) == 1
            return $arrayObj[0];
        }
    }
}
?>