<?php
include_once(__DIR__ . "/../dao/DemonDao");
include_once(__DIR__ . "/../service/DemonService.php");

class DemonController{
    private DemonDao $demonDao;
    private DemonService $demonService;

    public function __construct(){
        $this->demonDao = new DemonDao();
        $this->demonService = new DemonService();
    }

    //métodos
    //listar:
    public function listar(){
        return $this->demonDao->list();
    }

    //inserir
    public function inserir(Demon $demon){
        $erros = $this->demonService->validar($demon); //verificando se há erros

        if(!$erros){
            $this->demonDao->insert($demon);
        }

        return $erros;
    }
}
?>