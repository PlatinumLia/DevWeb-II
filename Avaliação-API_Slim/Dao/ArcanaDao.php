<?php
namespace App\Dao;

use App\Util\Connection;
use App\Mapper\ArcanaMapper;
use App\Model\Arcana;

use \Exception;

class ArcanaDao{
    private $conn; //faz a conexão com o banco
    private $arcanaMapper;

    public function __construct(){ //conectando ao banco
        $this->conn = Connection::getConnection();
        $this->arcanaMapper = new ArcanaMapper;
    }

    public function list(){ //listar as arcanas
        $sql = "SELECT * FROM arcana ORDER BY id"; //selecionando a tabela e dados no banco
        $stm = $this->conn->prepare($sql); //preparando o sql para ser executado
        $stm->execute(); //executando
        $result = $stm->fetchAll();

        return $this->arcanaMapper->mapFromDatabaseArrayToObjectArray($result);
    }

    public function findById(int $id) {
        $sql = 'SELECT * FROM arcana WHERE id = :id';

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue("id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $arrayObj = $this->arcanaMapper->mapFromDatabaseArrayToObjectArray($result);

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