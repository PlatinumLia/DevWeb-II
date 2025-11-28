<?php
include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Demon.php");

class DemonDao{
    private PDO $conn; 

    public function __construct(){ //conectando ao banco
        $this->conn = Connection::getConnection();        
    }

    //métodos
    //listar:
    public function list(){
        $sql = "SELECT d.*, arc.nome, t.tipo , r.nome 
                FROM demon d
                JOIN arcana arc ON (arc.id = d.id_arcana)
                JOIN tipos t ON (t.id = d.id_arcana)
                JOIN racas r ON (r.id = d.id_arcana)";

        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        return $this->map($result);
    }

    private function map(array $result){
        $demons = array();

        foreach($result as $r){
            $demon = new Demon();
            $demon->setId($r['id']);
            $demon->setNome($r['nome']);
            $demon->setPreco($r['preco']);

            $arcana = new Arcana();
            $arcana->setId($r['id']);
            $arcana->setNomeArc($r['nome']);
            $arcana->setNumArcana($r['numero_arcana']);
            $demon->setArcana($arcana);

            $tipo = new Tipos();
            $tipo->setId($r['id']);
            $tipo->setTipo($r['tipo']);
            $demon->setTipos($tipo);

            $raca = new Racas();
            $raca->setId($r['id']);
            $raca->setNome($r['nome']);
            $demon->setRacas($raca);

            array_push($demons, $demon);
        }

        return $demons;
    }

    //inserir:
    public function insert(Demon $demon){
        try{
            $sql = "INSERT INTO demon (nome, preco, id_arcana, id_tipos, id_racas) 
            VALUES (?, ?, ?, ?, ?)";

            $stm = $this->conn->prepare($sql);
            $stm->execute(array($demon->getNome(),
                                $demon->getPreco(),
                                $demon->getArcana(),
                                $demon->getTipos(),
                                $demon->getRacas()));
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function findById(int $id){
        $sql = "SELECT d.*, arc.nome, t.tipo , r.nome 
                FROM demon d
                JOIN arcana arc ON (arc.id = d.id_arcana)
                JOIN tipos t ON (t.id = d.id_arcana)
                JOIN racas r ON (r.id = d.id_arcana)";

        $stm = $this->conn->prepare($sql);
        $stm->execute([$id]);
        $result = $stm->fetchAll();

        $demons = $this->map($result);
        if(count($demons) == 1){
            return $demons[0];
        }
        return NULL;
    }

    public function update(Demon $demon){
        try{
            $sql = "UPDATE demon 
                    SET nome = ?, preco = ?, id_arcana = ?, id_tipos = ?, id_raca = ?
                    WHERE id = ?";
            $stm = $this->conn->prepare($sql);
            $stm->execute(array(
                            $demon->getNome(),
                            $demon->getPreco(),
                            $demon->getArcana(),
                            $demon->getTipos(),
                            $demon->getRacas()
            ));
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
?>