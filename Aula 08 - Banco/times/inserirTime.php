<?php
//mostra erros no PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("Connection.php");

//validação dos parâmetros
if(!isset($_GET['nome']) || !isset($_GET['cidade'])){
    echo "Informe os parâmetros [nome] e [cidade]!" . "<br>";
    exit;
}

//receber o nome e a cidade do time por
// parâmetro GET
$nome = $_GET['nome'];
$cidade = $_GET['cidade'];

//inserir o time no banco de dados
$conn = Connection::getConnection();
$sql = "INSERT INTO times (nome, cidade) VALUES (?, ?)"; //não passar parâmetros direto do SQL
$stm = $conn -> prepare($sql);
$stm -> execute(array($nome, $cidade));

//voltar para a listagem
header("location: listarTime.php");
?>