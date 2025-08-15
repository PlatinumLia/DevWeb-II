<?php
//declaração das variáveis contendo o array
$elementos = array("Agi", "Zio", "Bufu", "Garu", "Hama");
$listaVazia = array();

//percorre o array "$lista1" e depois coloca cada elemento no array vazio "$lista2"
foreach($elementos as $elmt){
    $listaVazia = $elmt;
    echo $listaVazia . " ";
}
?>