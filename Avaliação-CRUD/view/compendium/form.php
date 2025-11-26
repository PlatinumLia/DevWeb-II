<?php
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
//print_r($tipos);
?>

<h3>Demônio</h3>

<div>
    <form action="POST" action="">
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome" placeholder="Nome do demônio">
        </div>

        <div>
            <label for="">Preco</label>
            <input type="text" name="preco" placeholder="Preço do demônio">
        </div>

        <div>
            <label for="">Arcana</label>
            <select name="arcana" id="">
                <option value="">---- SELECIONE ----</option>

                <?php foreach ($arcanas as $arc) : ?>
                    <option value="<?= $arc->getId(); ?>">
                        <?= $arc->getCarta() ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <div>
            <label for="">Raça</label>
            <select name="raca" id="">
                <option value="">---- SELECIONE ----</option>

                <?php foreach ($racas as $r) : ?>
                    <option value="<?= $r->getId(); ?>">
                        <?= $r->getNome() ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label for="">Fraqueza</label>
            <select name="fraqueza" id="">
                <option value="">---- SELECIONE ----</option>

                <?php foreach ($tipos as $t) : ?>
                    <option value="<?= $t->getId(); ?>">
                        <?= $t->getTipo() ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <div>
            <button type="submit">Gravar</button>
            <a href="#">Voltar</a>
        </div>
    </form>

</div>