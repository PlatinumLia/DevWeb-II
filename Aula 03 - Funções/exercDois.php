<?php
//declaração das funções
function calcularAreaCirculo($raio){
    $resultado = 3.14 * ($raio * $raio);
    return $resultado;
}

function circuferencia($raio){
    $resultado = 2 * 3.14 * $raio;
    return $resultado;
}

//mostra no HTML os resultados
echo "Área e circuferência de círculos" . "<br><br>";
echo "Círculo 1 (raio 5):" . "<br>" . "Área: " . calcularAreaCirculo(5) . "<br>" . "Circuferência: " . circuferencia(5) . "<br><br>";

echo "Círculo 2 (raio 2):" . "<br>" . "Área: " . calcularAreaCirculo(2) . "<br>" . "Circuferência: " . circuferencia(2) . "<br><br>";

echo "Círculo 3 (raio 10):" . "<br>" . "Área: " . calcularAreaCirculo(10) . "<br>" . "Circuferência: " . circuferencia(10);
?>