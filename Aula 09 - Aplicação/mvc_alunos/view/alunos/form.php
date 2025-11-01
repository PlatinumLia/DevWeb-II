<?php
//carregar a lista de cursos
include_once(__DIR__ . "/../../controller/CursoController.php");
$cursoCont = new CursoController(); //objeto para carregar o "CursoController" 
$cursos = $cursoCont->listar(); //chamando o método listar
//print_r($cursos); //confirmando o que está gravado na variável "$cursos"

include_once(__DIR__ . "/../include/header.php");
?>

<h3> <?= $aluno && $aluno->getId() > 0 ? 'Editar' : 'Inserir' ?> aluno </h3>

<form method="POST" action="">

    <div>
        <label for="txtNome">Nome:</label>
        <input type="text" id="txtNome" name="nome" placeholder="Informe o nome" 
               value="<?= $aluno ? $aluno->getNome() : "" ?>">
    </div>

    <div>
        <label for="txtIdade">Idade:</label>
        <input type="number" id="txtIdade" name="idade" placeholder="Informe a idade" 
               value="<?= $aluno ? $aluno->getIdade() : "" ?>">
    </div>

    <div>
        <label for="selEstrang">Estrangeiro:</label>
        <select name="estrang" id="selEstrang">
            <option value="">----Selecione----</option>
            <option value="S" 
                <?= $aluno && $aluno->getEstrangeiro() == 'S' ? 'selected' : '' ?> >Sim</option>
            <option value="N" 
                <?= $aluno && $aluno->getEstrangeiro() == 'N' ? 'selected' : '' ?> >Não</option>
        </select>
    </div>

    <div>
        <label for="selCurso">Curso:</label>
        <select name="curso" id="selCurso">
            <option value="">----Selecione----</option>
            <?php foreach($cursos as $c): ?>
                <option value="<?= $c->getId();?>" 
                    <?php 
                        if($aluno && $aluno->getCurso() && $aluno->getCurso()->getId() == $c->getId()){
                            echo "selected";
                        }
                    ?> 
                > <!-- fechamento da tag <option> -->
                    <?= $c->getNomeTurma() ?>
                </option>    
            <?php endforeach; ?>
        </select>
    </div>

    <input type="hidden" value="<?= $aluno ? $aluno->getId() : 0 ?>" name="id">

    <div class="mt-2">
        <button type="submit" class="btn btn-success">Gravar</button>
    </div>

</form>


<div style="color: red">
    <?= $msgErro?>
</div>

<div>
    <a href="listar.php">Voltar</a>
</div>

<?php
include_once(__DIR__ . "/../include/footer.php");
?>