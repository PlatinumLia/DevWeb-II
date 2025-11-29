<?php
include_once(__DIR__ . "../../../util/config.php");
?>

<nav class="navbar navbar-expand-md bg-black px-3">

    <a class="navbar-brand text-white" href="<?= URL_BASE ?>">Demon Compendium</a>

    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navSite">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navSite"> <!-- menu responsivo-->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= URL_BASE ?>">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link text-white" href="<?= URL_BASE ?>/view/compendium/listar.php" id="navDropDown" >Compendium</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="#">Sobre</a>
            </li>
        </ul>
    </div>
</nav>