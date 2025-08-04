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
echo $elevado . "<br>";
echo $multiplicacao . "<br>";
echo $inversoPrimeiro . "<br>";
echo $somaMetadeSegundo . "<br>";
echo $diferenca . "<br>";
echo $inversoSegundo . "<br>";
?>