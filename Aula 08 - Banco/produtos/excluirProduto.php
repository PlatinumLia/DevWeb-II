<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("ConnectionP.php");

//pegando o id para excluir
$excId = 0;
if(isset($_GET['id'])){
    $excId = $_GET['id'];
}

//validando o id
if($excId <= 0){
    echo "ID inválido!";
    exit;
}

//executando o SQL para excluir o produto
$conn = ConnectionP::getConnection();
$sql = "DELETE FROM produtos WHERE = id = ?";
$stm = $connect -> prepare($sql);
$stm -> execute(array($excId));

//voltando para a pág. inicial
header("location: listarProduto.php");
?>