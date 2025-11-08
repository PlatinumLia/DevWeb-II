<?php
//include do UsuarioController -> controlará se o usuário está logado ou não
include_once(__DIR__ . "/../../controller/UsuarioController.php");
//include do arquivo de configuração para funcionar a URL_BASE 
include_once(__DIR__ . "/../../util/config.php");

$usuCont = new UsuarioController();
$usuCont->deslogar();

header("location: " . URL_BASE . "/view/login/login.php");
?>