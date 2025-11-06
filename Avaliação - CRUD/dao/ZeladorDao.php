<?php
//incluindo a classe de conexão e a do zelador
include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Zelador.php");

class ZeladorDao{
    private PDO $conn;

    //construtor para conectar ao banco
    public function __construct(){
        $this->conn = Connection::getConnection();
    }

    //métodos
    //método para listar os jinkis
    public function list(){
        $sql = "SELECT z.nome nome_zelador, z.ocupacao ocupacao, z.idade idade, j.id_jinki jinki, e.id_equipe equipe 
                FROM zelador z
                JOIN jinki j ON (j.id = z.id_jinki)
                JOIN equipe e ON (e.id = z.id_equipe)";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        return $this->map($result);
    }

    private function map(array $result){ //conversão de array assoc. para objeto
        $zeladores = array();

        foreach($result as $r){
            $zelador = new Zelador(); //criando objeto "Jinki"
            $zelador->setId($r['id']);
            $zelador->setNome($r['nome']);
            $zelador->setOcupacao($r['ocupacao']);
            $zelador->setIdade($r['idade']);

            $jinki = new Jinki();
            $jinki->setId($r['id_jinki']);
            $jinki->setNome($r['nome_jinki']);
            $zelador->setJinki($jinki);

            $equipe = new Equipe();
            $equipe->setId($r['id_equipe']);
            $equipe->setNome($r['nome_equipe']);
            $zelador->setEquipe($equipe);

            array_push($zeladores, $zelador);
        }
        return $zeladores;
    }
}
?>