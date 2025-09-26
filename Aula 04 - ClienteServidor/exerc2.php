<?php
//método GET
/*
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];
$mediaAritmetica = ($num1 + $num2 + $num3) / 3;

echo "Parâmetros recebidos (método GET // aparece na página):" . "<br><br>";
echo "Num 1: " . $num1 . "<br>" . "Num 2: " . $num2 . "<br>" . "Num 3: " . $num3 . "<br><br>";
echo "Média artimética: " . $mediaAritmetica;
*/

//método POST - Thunder Client
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];
$mediaAritmetica = ($numero1 + $numero2 + $numero3) / 3;

echo "Parâmetros recebidos (método POST // não aparece na página):" . "<br><br>";
echo "Número 1: " . $numero1 . "<br>" . "Número 2: " . $numero2 . "<br>" . "Número 3: " . $numero3 . "<br><br>";
echo "Média artimética: " . $mediaAritmetica;

?>