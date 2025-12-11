<?php
namespace App\Dao;

use App\Util\Connection;
use App\Mapper\DemonMapper;
use App\Model\Demon;

use \Exception;

class DemonDao{
    private $conn;
    private $demonMapper;

    public function __construct(){ //conectando ao banco, e criando o mapper
        $this->conn = Connection::getConnection();
        $this->demonMapper = new DemonMapper();
    }

    //métodos
    //listar:
    public function list(){
        $sql = "SELECT d.*, 
                       arc.id id_arcana, arc.nome arcana, arc.numero_arcana num_arcana, 
                       t.id id_fraqueza, t.tipo fraqueza, 
                       r.id id_raca, r.nome raca
                FROM demon d
                JOIN arcana arc ON (arc.id = d.id_arcana)
                JOIN tipos t ON (t.id = d.id_tipos)
                JOIN racas r ON (r.id = d.id_racas)";

        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        return $this->demonMapper->mapFromDatabaseArrayToObjectArray($result);
    }

    public function findById(int $id){
        $sql = "SELECT d.*, 
                       arc.id id_arcana, arc.nome arcana, arc.numero_arcana num_arcana, 
                       t.id id_fraqueza, t.tipo fraqueza, 
                       r.id id_raca, r.nome raca
                FROM demon d
                JOIN arcana arc ON (arc.id = d.id_arcana)
                JOIN tipos t ON (t.id = d.id_tipos)
                JOIN racas r ON (r.id = d.id_racas)
                WHERE d.id = :id";

        $stm = $this->conn->prepare($sql);
        $stm->bindValue("id", $id);
        $stm->execute([$id]);
        $result = $stm->fetchAll();

        $arrayObj = $this->demonMapper->mapFromDatabaseArrayToObjectArray($result);

        if (count($arrayObj) == 0) {
            return null;
        } else if (count($arrayObj) > 1) {
            new Exception("Mais de um registro encotrado para o ID" . $id);
        } else { //count($arrayObj) == 1
            return $arrayObj[0];
        }
    }

    //inserir:
    public function insert(Demon $demon){
        $sql = "INSERT INTO demon (nome, preco, id_arcana, id_tipos, id_racas) 
                VALUES (:nome, :preco, :id_arcana, :id_tipos, :id_racas)";

        $stm = $this->conn->prepare($sql);
        $stm->bindValue("nome", $demon->getNome());
        $stm->bindValue("preco", $demon->getPreco());
        $stm->bindValue("id_arcana", $demon->getArcana()->getCarta());
        $stm->bindValue("id_tipos", $demon->getTipos()->encurtaTipo());
        $stm->bindValue("id_racas", $demon->getRacas());
        $stm->execute();

        return $demon;
    }

    public function update(Demon $demon){
        $sql = "UPDATE demon 
                SET nome = :nome, preco = :preco, id_arcana = :id_arcana, id_tipos = :id_tipos, id_racas = :id_racas
                WHERE id = :id";
        $stm = $this->conn->prepare($sql);
        $stm->bindValue("nome", $demon->getNome());
        $stm->bindValue("preco", $demon->getPreco());
        $stm->bindValue("id_arcana", $demon->getArcana()->getCarta());
        $stm->bindValue("id_tipos", $demon->getTipos()->encurtaTipo());
        $stm->bindValue("id_racas", $demon->getRacas());
        $stm->bindValue("id", $demon->getId());
        $stm->execute();

        return $demon;
    }

    public function exclude(int $id){
        $sql = "DELETE FROM demon WHERE id = :id";

        $stm = $this->conn->prepare($sql);
        $stm->bindValue("id", $id);
        $stm->execute();
    }
}
