<?php
//carregar a lista de cursos
include_once(__DIR__ . "/../../controller/CursoController.php");
include_once(__DIR__ . "/../../../util/config.php");
include_once(__DIR__ . "/../include/menu.php");

$cursoCont = new CursoController(); //objeto para carregar o "CursoController" 
$cursos = $cursoCont->listar(); //chamando o método listar
//print_r($cursos); //confirmando o que está gravado na variável "$cursos"

include_once(__DIR__ . "/../include/header.php");
?>

<h3> <?= $aluno && $aluno->getId() > 0 ? 'Editar' : 'Inserir' ?> aluno </h3>

<div class="row">
    <div class="col-6">
        <form method="POST" action="">

            <div class="mb-3">
                <label for="txtNome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="txtNome" name="nome" placeholder="Informe o nome" 
                    value="<?= $aluno ? $aluno->getNome() : "" ?>">
            </div>

            <div class="mb-3">
                <label for="txtIdade" class="form-label">Idade:</label>
                <input type="number" class="form-control" id="txtIdade" name="idade" placeholder="Informe a idade" 
                    value="<?= $aluno ? $aluno->getIdade() : "" ?>">
            </div>

            <div class="mb-3">
                <label for="selEstrang" class="form-label">Estrangeiro:</label>
                <select name="estrang" class="form-select" id="selEstrang">
                    <option value="">----Selecione----</option>
                    <option value="S" 
                        <?= $aluno && $aluno->getEstrangeiro() == 'S' ? 'selected' : '' ?> >Sim</option>
                    <option value="N" 
                        <?= $aluno && $aluno->getEstrangeiro() == 'N' ? 'selected' : '' ?> >Não</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="selCurso" class="form-label">Curso:</label>
                <select name="curso" class="form-select" id="selCurso">
                    <option value="">----Selecione----</option>
                    <?php foreach($cursos as $c): ?>
                        <option value="<?= $c->getId(); ?>" 
                            <?php 
                                if($aluno && $aluno->getCurso() && $aluno->getCurso()->getId() == $c->getId()){
                                    echo "selected";
                                }
                            ?> 
                        > <!-- fechamento da tag <option> -->
                            <?= $c->getCursoTurno() ?>
                        </option>    
                    <?php endforeach; ?>
                </select>
            </div>

            <input type="hidden" value="<?= $aluno ? $aluno->getId() : 0 ?>" name="id">

            <div class="mt-2">
                <button type="submit" class="btn btn-dark">Gravar</button>
            </div>

        </form>
    </div> <!-- fecha a div col -->

    <div class="col-6">
        <?php if($msgErro): ?>
            <div class="alert alert-dark mt-5">
                <?= $msgErro?>
            </div>
        <?php endif; ?>
    </div> <!-- fecha a 2ª div col -->    
</div> <!-- fecha a div do row -->

<div>
    <a href="listar.php" class="btn btn-outline-dark mt-5">Voltar</a>
</div>

<?php
include_once(__DIR__ . "/../include/footer.php");
?>