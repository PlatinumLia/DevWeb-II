<?php
#verificar se o usuário está logado
//include do UsuarioController -> controlará se o usuário está logado ou não
include_once(__DIR__ . "/../../controller/UsuarioController.php");
//include do arquivo de configuração para funcionar a URL_BASE 
include_once(__DIR__ . "/../../util/config.php");

$usuCont = new UsuarioController();
if(!$usuCont->usuarioEstaLogado()){ //fazendo a verficação
    header("location: " . URL_BASE . "/view/login/login.php");
    exit;
}

?>