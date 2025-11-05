<?php
include_once(__DIR__ . "/../../controller/AlunoController.php"); //incluindo a pasta que tem a classe AlunoController
$alunoCont = new AlunoController(); //declarando o objeto
$alunos = $alunoCont -> listar(); //chamando o objeto
//print_r($alunos); //mostrando o que há no objeto

include_once(__DIR__ . "/../include/header.php");
include_once(__DIR__ . "/../include/menu.php");
?>

<h3>Listagem de Alunos</h3> 

<div>
    <a href="inserir.php" class="btn btn-dark">Inserir</a>
</div>

<table class="table table-bordered table-striped">
    <!-- Cabeçalho -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <!-- Dados -->
   <?php foreach($alunos as $a) : ?>
        <tr>
            <td> <?= $a->getId() ?> </td>
            <td> <?= $a->getNome()?> </td>
            <td> <?= $a->getIdade()?> </td>
            <td> <?= $a->isEstrangeiro()?> </td>
            <td> <?= $a->getCurso()->getCursoTurno()?> </td>
            <td> 
                <a href="editar.php?id=<?= $a->getId() ?>"> 
                    <img src="../../img/btn_editar.png"> 
                </a> 
            </td>
            <td> 
                <a href="excluir.php?id=<?= $a->getId() ?>"> 
                    <img src="../../img/btn_excluir.png"> 
                </a> 
            </td>
        </tr>
   <?php endforeach; ?>
</table>

<?php
include_once(__DIR__ . "/../include/footer.php");
?>