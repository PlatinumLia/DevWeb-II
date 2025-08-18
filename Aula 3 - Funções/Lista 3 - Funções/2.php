<?php
//declaração das funções
function areaRetangulo($base, $altura){
    $resultado = $base * $altura;
    return $resultado;
}

function calculaPerimetroRetangulo($lado1, $lado2, $lado3, $lado4){
    $resultado = $lado1 + $lado2 + $lado3 + $lado4;
    return $resultado;
}    

//mostra os resultados na página HTML
echo "Área e Perímetro de 3 retângulo: " . "<br><br>";
echo "Retângulo 1: <br>" . "Área: " . areaRetangulo(2, 2) . "<br>Perímetro: " . calculaPerimetroRetangulo(2, 2, 2, 2) . "<br><br>";

echo "Retângulo 2: <br>" . "Área: " . areaRetangulo(10, 4) . "<br>Perímetro: " . calculaPerimetroRetangulo(10, 10, 4, 4) . "<br><br>";

echo "Retângulo 3: <br>" . "Área: " . areaRetangulo(50, 25) . "<br>Perímetro: " . calculaPerimetroRetangulo(50, 50, 25, 25);

?>