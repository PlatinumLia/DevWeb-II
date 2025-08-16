<?php
//método GET
/*
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$soma = $num1 + $num2;

// .../exerc1.php?num1=()&num2=()
echo "Parâmetro recebidos (método GET // aparece na página): " . "<br><br>";
echo "Num 1: " . $num1 . "<br>";
echo "Num 2: " . $num2 . "<br><br>" . "Soma dos parâmetros: " . $soma ;
*/

//método POST - Thunder Client
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$somaNumeros2 = $numero1 + $numero2;

echo "<br><br>" . "Parâmetro recebidos (método POST // não aparecerá nada na página): " . "<br><br>";
echo "Número 1: " . $numero1 . "<br>";
echo "Número 2: " . $numero2 . "<br><br>" . "Soma dos parâmetros: " . $somaNumero2 ;
?>