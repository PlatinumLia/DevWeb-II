<?php
include_once("Calculadora.php");

//criar um objeto da classe "Calculadora"
$calc = new Calculadora(); //cria o objeto

//$calc->setNum1(12); --> Caso não tenha o construtor
//$calc->setNum2(6);

echo $calc->somar();
?>