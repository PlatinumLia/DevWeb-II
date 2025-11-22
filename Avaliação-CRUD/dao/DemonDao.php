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
        $sql = "SELECT d.*, arc.nome arcana
                FROM demon a
                JOIN arcana arc ON (arc.id = d.id_arcana)";

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
            $demon->setArcana($r['arcana']);
            $demon->setFraqueza($r['fraqueza']);
            $demon->setResistencia($r['resistencia']);
            $demon->setAbsorcao($r['absorcao']);
            $demon->setNulificacao($r['nulificacao']);

            $arcana = new Arcana();
            $arcana->setId($r['id']);
            $arcana->setNomeArc($r['nome']);
            $arcana->setNumArcana($r['numero_arcana']);

            $demon->setArcana($arcana);

            array_push($demons, $demon);
        }

        return $demons;
    }

    //inserir:
    public function insert(Demon $demon){
        try{
            $sql = "INSERT INTO demon (nome, preco, fraqueza, resistencia, absorcao, nulificacao, id_arcana) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

            $stm = $this->conn->prepare($sql);
            $stm->execute(array($demon->getNome(), 
                                $demon->getPreco(), 
                                $demon->getArcana()->getCarta(),
                                $demon->getFraqueza(), 
                                $demon->getResistencia(), 
                                $demon->getAbsorcao(), 
                                $demon->getNulificacao()));
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
?>