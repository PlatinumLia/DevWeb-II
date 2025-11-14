<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("persistencia.php");

//1 - carregar os dados do arquivo JSON
$livros = buscarDados("livros.json");

//2 - receber o id do livro
$id = $_GET['id'];

//3 - encontrar a posição do livro no array para excluir
$idxExcluir = -1;
foreach($livros as $idx => $l){
    if($id == $l['id']){
        $idxExcluir = $idx;
        break;
    }
}

//echo $idxExcluir;

//4 - remover o índice encontrado do array
array_splice($livros, $idxExcluir, 1);

//5 - salvar os dados no arquivo
salvarDados($livros, "livros.json");

//6 - redirecionar para a listagem
header("location: livros.php");
?>