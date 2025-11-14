<?php
//declaração das variáveis
$numeros = array(1, 8, 9, 7, 20, 45, 32, 78, 90, 99);
$mediaAritmetica;
$soma=0;

echo "MÉDIA ARITMÉTICA DE 10 NÚMEROS:" . "<br><br>";
for($i=0; $i<count($numeros); $i++){
    $soma += $numeros[$i];
    $mediaAritmetica = $soma/10;
}
echo "Nº do Array:" . "<br>";
foreach($numeros as $num){
    echo $num . "<br>";
}
echo "<br>". "Média aritmética: " . $mediaAritmetica;
?>