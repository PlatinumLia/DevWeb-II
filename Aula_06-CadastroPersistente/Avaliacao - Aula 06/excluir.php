<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("persistencia.php"); 

$animes = buscarDados("animes.json");
$id = $_GET['id'];
$idExcluir = -1;

foreach($animes as $idE => $a){
    if($id == $a['id']){
        $idExcluir = $idE;
        break;
    }
}

array_splice($animes, $idExcluir, 1);
salvarDados($animes, "animes.json");
header("location: animes.php");
?>