<?php
//declaração das funções


//declaração das variaáveis
$numInicial = 1;
if(isset($_GET['numInicial'])){
    $numInicial = $_GET['numInicial'];
}

$numFinal = 100;
if(isset($_GET['numFinal'])){
    $numFinal = $_GET['numFinal'];
}

//laço para imprimir os Nº
for($i=$numInicial; $i<=$numFinal; ++$i){
    echo $i . "<br>";
}
?>