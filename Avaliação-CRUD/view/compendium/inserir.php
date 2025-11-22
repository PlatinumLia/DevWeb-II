<?php
include_once(__DIR__ . "/../../model/Demon.php");
include_once(__DIR__ . "/../../controller/DemonController.php");

$msgErro = "";
$demon = NULL;

if(isset($_POST['nome'])){ //verificando se foi clicado em "gravar"
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : NULL;
    $preco = is_numeric($_POST['preco']) ? $_POST['preco'] : NULL;
}
?>