<?php
//incluindo o AlunoController
include_once(__DIR__ . "/../../controller/AlunoController.php");

//1 - pegar o id pela superglobal GET
$id = 0;
if(isset($_GET['id'])){
    $id = $_GET['id']; 
}

//2 - chamar o controller para excluir
$alunoExc = new AlunoController(); //criando um objeto AlunoController
$alunoExc -> excluir($id);

header("location: listar.php"); //voltando para a página de listagem
?>