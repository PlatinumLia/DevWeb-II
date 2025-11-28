<?php
include_once(__DIR__ . "/../../controller/DemonController.php");

$id = 0;
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$demonExc = new DemonController();
$demonExc->excluir($id);

header("location:listar.php");
?>