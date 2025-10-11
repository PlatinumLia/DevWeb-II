<?php
include_once(__DIR__ . "/../../controller/AlunoController.php"); //incluindo a pasta que tem a classe AlunoController
$alunoCont = new AlunoController(); //declarando o objeto
$alunos = $alunoCont -> listar(); //chamando o objeto
//print_r($alunos); //mostrando o que há no objeto

include_once(__DIR__ . "/../include/header.php");
?>

<h3>Listagem de Alunos</h3> 

<div>
    <a href="inserir.php">Inserir</a>
</div>

<table border = "1">
    <!-- Cabeçalho -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        <th></th>
        <th></th>
    </tr>

    <!-- Dados -->
   <?php foreach($alunos as $a) : ?>
        <tr>
            <td> <?= $a->getId() ?> </td>
            <td> <?= $a->getNome()?> </td>
            <td> <?= $a->getIdade()?> </td>
            <td> <?= $a->isEstrangeiro()?> </td>
            <td> <?= $a->getCurso()->getNomeTurma()?> </td>
            <td></td>
            <td></td>
        </tr>
   <?php endforeach; ?>
</table>

<?php
include_once(__DIR__ . "/../include/footer.php");
?>