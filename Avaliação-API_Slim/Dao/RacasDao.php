<?php
namespace App\Dao;

use App\Util\Connection;
use App\Mapper\RacasMapper;
use App\Model\Racas;

use \Exception;

class RacasDao{
    private $conn; //faz a conexão com o banco
    private $racasMapper;

    public function __construct(){ //conectando ao banco
        $this->conn = Connection::getConnection();
        $this->racasMapper = new RacasMapper();
    }

    public function list(){ //listar as arcanas
        $sql = "SELECT * FROM racas ORDER BY id"; //selecionando a tabela e dados no banco
        $stm = $this->conn->prepare($sql); //preparando o sql para ser executado
        $stm->execute(); //executando
        $result = $stm->fetchAll();

        return $this->racasMapper->mapFromDatabaseArrayToObjectArray($result);
    }

    public function findById(int $id) {
        $sql = 'SELECT * FROM racas WHERE id = :id';

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue("id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $arrayObj = $this->racasMapper->mapFromDatabaseArrayToObjectArray($result);

        if(count($arrayObj) == 0){
            return null;
        }else if(count($arrayObj) > 1){
            new Exception("Mais de um registro encontrado para o ID " . $id);
        }else{ //count($arrayObj) == 1
            return $arrayObj[0];
        }
    }
}
