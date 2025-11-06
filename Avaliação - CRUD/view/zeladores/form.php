<?php
include_once(__DIR__ . "/../../controller/JinkiController.php");
include_once(__DIR__ . "/../../controller/EquipeController.php");
include_once(__DIR__ . "/../../util/config.php");
include_once(__DIR__ . "/../include/header.php");

$jinkiCont = new JinkiController();
$jinkis = $jinkiCont->listar();

$equipeCont = new EquipeController();
$equipes = $equipeCont->listar();
?>

<h3>Zelador</h3>
<div>
    <form method="POST" action="">
        <div>
            <label for="txtNome">Nome:</label>
        </div>
    </form>
</div>

<?php
include_once(__DIR__ . "/../include/footer.php");
?>