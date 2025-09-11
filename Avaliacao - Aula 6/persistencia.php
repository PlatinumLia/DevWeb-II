<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

define("DIR_ARQUIVOS", "arquivo");

// funções de de persistência
function salvarDados($array, $arquivo){
    $json = json_encode($array, JSON_PRETTY_PRINT);
    file_put_contents(DIR_ARQUIVOS . "/" . $arquivo, $json);
}

function buscarDados($arquivo) : array{
    $dados = array();

    $nomeArq = DIR_ARQUIVOS . "/" . $arquivo;
    if(file_exists($nomeArq)){
        $json = file_get_contents($nomeArq);
        $dados = json_decode($json, true);
    }
    return $dados;
}
?>