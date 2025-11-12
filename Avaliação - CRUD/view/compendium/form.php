<?php
include_once(__DIR__ . "/../../controller/AbsorbController.php");
include_once(__DIR__ . "/../../controller/ArcanaController.php");
include_once(__DIR__ . "/../../util/config.php");

$absCont = new AbsorbController(); //carregando o objeto "AbsorbController"
$absorbs = $absCont->listar();

$arcCont = new ArcanaController();
$arcanas = $arcCont->listar();
//print_r($absorbs);
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
            <select name="" id="">---- SELECIONE ----</select>
            <select name="" id=""></select>
        </div>

        <div>
            <label for="">Arcana</label>
            <select name="arcana" id="">
                <option value="">---- SELECIONE ----</option>
                <?php foreach($arcanas as $arc) : ?>
                    <option value="<?=  $arc->getId(); ?>"
                    
                    ><!-- fechamento da tag <option> -->
                        <?= $arc->getCarta() ?>
                    </option>
                <?php endforeach;?>
            </select>
        </div>
        <div>
            <label for="">Fraqueza</label>
            <select name="fraqueza" id="">
                <option value="">---- SELECIONE ----</option>
                <option value=""></option>
            </select>
        </div>

        <div>
            <label for="">Resistência</label>
            <select name="resistencia" id="">
                <option value="">---- SELECIONE ----</option>
                <option value=""></option>
            </select>
        </div>

        <div>
            <label for="">Absorção</label>
            <select name="absorcao" id="">
                <option value="">---- SELECIONE ----</option>
                <?php foreach($absorbs as $abs) : ?>
                    <option value="<?=  $abs->getId(); ?>"
                    > <!-- fechamento da tag <option>-->
                        <?=  $abs->getTipoAbs() ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label for="">Nulificação</label>
            <select name="nulificacao" id="">
                <option value="">---- SELECIONE ----</option>
                <option value=""></option>
            </select>
        </div>
        
        <div>
            <a href="#">Gravar</a>
            <a href="#">Voltar</a>
        </div>
    </form>
    
</div>