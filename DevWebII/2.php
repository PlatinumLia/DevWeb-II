<?php

//declaração de variáveis
$n=5; 
$r=3;

for($i=1; $i<=10; $i++){
    echo $n . "<br>"; //começa mostrando o 5 como primeiro nº
    $n += $r; //soma o nº anterior (começanndo pelo 5) com a razão (3)
}
?>