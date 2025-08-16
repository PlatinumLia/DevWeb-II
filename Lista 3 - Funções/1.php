<?php
//declaração da função
function f($x){
    $resultado = 5*$x + 2*$x + 3; 
    return $resultado;
}

echo "Função f(x)" . "<br><br>";

echo "f(2)= " . f(2). "<br>";
echo "f(8)= " . f(8) . "<br>";
echo "f(10)= " . f(10) . "<br>";
echo "f(-2)= " . f(-2) . "<br>";
echo "f(-15)= " . f(-15) . "<br>";
?>