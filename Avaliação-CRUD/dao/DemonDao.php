<?php
include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Demon.php");

class DemonDao{
    private PDO $conn; 

    public function __construct(){ //conectando ao banco
        $this->conn = Connection::getConnection();        
    }
}
?>