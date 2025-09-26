<?php
define("DIR_ARQUIVOS", "arquivos"); //constante para pegar o diretório

//funções de persistência
function salvarDados($array, $arquivo){
    //1 - converter o array para json
    $json = json_encode($array, JSON_PRETTY_PRINT);

    //2 - salvar o json no arquivo
    file_put_contents(DIR_ARQUIVOS . "/" . $arquivo, $json);
}

function buscarDados($arquivo) : array{
    $dados = array();

    //buscar os dados do arquivo
    $nomeArquivo = DIR_ARQUIVOS . "/" . $arquivo;
    if(file_exists($nomeArquivo)){
        $json = file_get_contents($nomeArquivo);
        $dados = json_decode($json, true);
    }
    return $dados;
}


?>