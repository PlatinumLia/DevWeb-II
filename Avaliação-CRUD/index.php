<?php
include_once(__DIR__ . "/view/include/header.php");
?>

<div class="row mt-3 justify-content-center">
    <div class="col-3">
        <div class="card text-center">
            <img class="card-image-top mx-auto" src="" style="max-width: 50%; height: auto;" />
            <div class="card-body">
                <h5 class="card-title">Demônios</h5>
                
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="<?= URL_BASE ?>/view/alunos/listar.php" class="card-link">Listagem de demônios</a> 
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
include_once(__DIR__ . "/view/include/footer.php");
?>