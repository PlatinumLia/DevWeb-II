<?php
//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once(__DIR__ . "/../../controller/DemonController.php");
$demonCont = new DemonController();
$demons = $demonCont->listar();
//print_r($demons);

include_once(__DIR__ . "/../include/header.php");
//include_once(__DIR__ . "/../include/menu.php");
?>

<h3>Demon Compendium</h3>

<div>
    <a href="inserir.php">Inserir</a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Raça</th>
        <th>Arcana</th>
        <th>Fraqueza</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <!-- Dados -->
    <?php foreach ($demons as $d) : ?>
        <tr>
            <td> <?= $d->getId() ?> </td>
            <td> <?= $d->getNome() ?> </td>
            <td> <?= $d->getPreco() ?> </td>
            <td> <?= $d->getArcana()->getCarta() ?> </td>
            <td> <?= $d->getRacas() ?> </td>
            <td> <?= $d->getTipos() ?> </td>
            <td> </td>
            <td> </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
include_once(__DIR__ . "/../include/footer.php");
?>