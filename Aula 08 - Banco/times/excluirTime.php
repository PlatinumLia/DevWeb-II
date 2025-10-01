<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("Connection.php");

//1 - pegar o id que veio no parâmetro GET
$excId = 0;
if(isset($_GET['id'])){
    $excId = $_GET['id'];
}

//2 - validar o id (num > 0)
if($excId <= 0){
    echo "ID para exclusão inválido";
    exit;
}

//3 - executar o SQL para excluir
$conn = Connection::getConnection();
$sql = "DELETE FROM times WHERE id = ?";
$stm = $conn -> prepare($sql);
$stm -> execute(array($excId));

//4 - redirecionar para a listagem
header("location: listarTime.php");
?>