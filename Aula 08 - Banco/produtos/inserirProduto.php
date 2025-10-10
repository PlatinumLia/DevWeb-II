<?php
//mostra erros no PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//incluindo o arquivo que permite a conexão
include_once("ConnectionP.php");

if(!isset($_GET['descricao']) || !isset($_GET['un_medida']) ){
    echo "Insira os parâmetros [descricao] e [un_medida]" . "<br>";
    exit;
}

//recebendo os parâmetros por método GET
$descricao = $_GET['descricao'];
$un_medida = $_GET['un_medida'];

//inserindo produto no banco de dados
$conn = ConnectionP::getConnection();
$sql = "INSERT INTO produtos (? , ?) VALUES (?, ?)";
$stm = $conn -> prepare($sql);
$stm -> execute(array($descricao, $un_medida));

//voltando para a listagem
header("location: listarProduto.php");
?>