<?php
//mostra erros no PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//incluindo o arquivo que permite a conexão
include_once("connectionP.php");

if(!isset($_GET['descricao']) || !isset($_GET['un_medida']) ){
    echo "Insira os parâmetros [descricao] e [un_medida]";
    exit;
}

//recebendo os parâmetros por método GET
$descricao = $_GET['descricao'];
$un_medida = $_GET['un_medida'];

//inserindo produto no banco de dados
$connect = ConnectionP::getConnection();
$sql = "INSERT INTO produtos (? , ?) VALUES (?, ?)";
$stmInstruct = $connect -> prepare($sql);
$stmInstruct -> execute(array($descricao, $un_medida));

//voltando para a listagem
header("location: listarProduto.php");
?>