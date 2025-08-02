<?php
$soma = 0;
$percorreNums = 1;
while($percorreNums <= 100){
    $soma += $percorreNums;
    $percorreNums++;
}

echo "Soma dos números: " . $soma;
?>