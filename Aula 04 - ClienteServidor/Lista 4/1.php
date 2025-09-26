<?php
//declaração das variáveis
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];

//será usado o método POST, então precisará usar o Thunder Client (visto na última aula)
//não aparecerá nada no HTML
echo "Nome completo: ". $_POST['nome'] . " " . $_POST['sobrenome'] . "<br>";
echo "Idade: " . $_POST['idade'];
?>