<?php
include_once(__DIR__ . "/../../controller/ArcanaController.php");
include_once(__DIR__ . "/../../controller/TiposController.php");
include_once(__DIR__ . "/../../util/config.php");

$arcCont = new ArcanaController();
$arcanas = $arcCont->listar();

$tiposCont = new TiposController();
$tipos = $tiposCont->listar();
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
            <label for="">Resistência</label>
            <select name="resistencia" id="">
                <option value="">---- SELECIONE ----</option>

                <?php foreach ($tipos as $t) : ?>
                    <option value="<?= $t->getId(); ?>">
                        <?= $t->getTipo() ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <div>
            <label for="">Absorção</label>
            <select name="absorcao" id="">
                <option value="">---- SELECIONE ----</option>

                <?php foreach ($tipos as $t) : ?>
                    <option value="<?= $t->getId(); ?>">
                        <?= $t->getTipo() ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <div>
            <label for="">Nulificação</label>
            <select name="nulificacao" id="">
                <option value="">---- SELECIONE ----</option>

                <?php foreach ($tipos as $t) : ?>
                    <option value="<?= $t->getId(); ?>">
                        <?= $t->getTipo() ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <div>
            <a href="#">Gravar</a>
            <a href="#">Voltar</a>
        </div>
    </form>

</div>