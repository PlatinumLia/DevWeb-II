<?php
include_once(__DIR__ . "/../dao/DemonDao");

class DemonController{
    private DemonDao $demonDao;

    public function __construct(){
        $this->demonDao = new DemonDao();
    }

    //métodos
    //listar:
    public function listar(){
        return $this->demonDao->list();
    }

    //inserir
    public function inserir(Demon $demon){
        $this->demonDao->insert($demon);
    }
}
?>