<?php
//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once(__DIR__ . "/../../controller/ArcanaController.php");
include_once(__DIR__ . "/../../controller/RacasController.php");
include_once(__DIR__ . "/../../controller/TiposController.php");
include_once(__DIR__ . "/../../util/config.php");

$arcCont = new ArcanaController();
$arcanas = $arcCont->listar();

$tiposCont = new TiposController();
$tipos = $tiposCont->listar();

$racasCont = new RacasController();
$racas = $racasCont->listar();
//print_r($racas);

include_once(__DIR__ . "/../include/header.php");
include_once(__DIR__ . "/../include/menu.php");
?>

<h3> <?= $demon && $demon->getId() > 0 ? 'Editar' : 'Inserir' ?> Demônio</h3>

<div class="container row">
    <div class="col-6">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="">Nome: </label>
                <input type="text" name="nome" placeholder="Nome do demônio" value="<?= $demon ? $demon->getNome() : "" ?>">
            </div>

            <div class="mb-3">
                <label for="">Preco: </label>
                <input type="number" name="preco" placeholder="Preço do demônio" value="<?= $demon ? $demon->getPreco() : "" ?>">
            </div>

            <div class="mb-3">
                <label for="selArcana" class="form-label">Arcana: </label>
                <select name="arcana" class="form-select" id="selArcana">
                    <option value="">---- SELECIONE ----</option>

                    <?php foreach ($arcanas as $arc) : ?>
                        <option value="<?= $arc->getId(); ?>"
                            <?php
                            if ($demon && $demon->getArcana() && $demon->getArcana()->getId() == $arc->getId()) {
                                echo "selected";
                            }
                            ?>> <!-- fechamento da tag <option> -->
                            <?= $arc->getCarta() ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div>
                <label for="selRaca" class="form-label">Raça</label>
                <select name="raca" class="form-select" id="selRaca">
                    <option value="">---- SELECIONE ----</option>

                    <?php foreach ($racas as $r) : ?>
                        <option value="<?= $r->getId(); ?>"
                            <?php
                            if ($demon && $demon->getRacas() && $demon->getRacas()->getId() == $r->getId()) {
                                echo "selected";
                            }
                            ?>> <!-- fechamento da tag <option> -->
                            <?= $r->getNome() ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <label for="selFraqueza" class="form-label">Fraqueza</label>
                <select name="fraqueza" class="form-select" id="selFraqueza">
                    <option value="">---- SELECIONE ----</option>

                    <?php foreach ($tipos as $t) : ?>
                        <option value="<?= $t->getId(); ?>"
                            <?php
                            if ($demon && $demon->getTipos() && $demon->getTipos()->getId() == $t->getId()) {
                                echo "selected";
                            }
                            ?>> <!-- fechamento da tag <option> -->
                            <?= $t->getTipo() ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <input type="hidden" value="<?= $demon ? $demon->getId() : 0 ?>" name="id">

            <div class="mt-2">
                <button type="submit" class="btn btn-dark">Gravar</button>
                <a href="listar.php" class="btn btn-outline-dark">Voltar</a>
            </div>

        </form>

    </div> <!-- fechamento da <div class="col-6"> -->
</div> <!-- fechamento da <div class="row"> -->

<div class="col-3">
    <?php if ($msgErro): ?>
        <div class="alert alert-dark mt-3">
            <?= $msgErro ?>
        </div>
    <?php endif; ?>
</div>

<?php
include_once(__DIR__ . "/../include/footer.php");
?>