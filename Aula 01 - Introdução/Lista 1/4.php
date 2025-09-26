<?php

$primeiro=5;
$segundo=4;
$elevado=pow($primeiro, $segundo);
$multiplicacao=$primeiro*$segundo;
$inversoPrimeiro=$primeiro*(1/$primeiro) . "/" . $primeiro;
$somaMetadeSegundo=$primeiro+($segundo/2);
$diferenca=$primeiro-$segundo;
$inversoSegundo=$segundo*(1/$segundo) . "/" . $segundo;

echo "Cálculos com os nº 5 e 4:" . "<br><br>";
echo "Primeiro elevado ao segundo: " . $elevado . "<br>";
echo "Multiplicação: " . $multiplicacao . "<br>";
echo "Inverso do primeiro: " . $inversoPrimeiro . "<br>";
echo "Primeiro somado a metade do segundo: " . $somaMetadeSegundo . "<br>";
echo "Diferença: " . $diferenca . "<br>";
echo "Inverso do segundo: " . $inversoSegundo . "<br>";
?>