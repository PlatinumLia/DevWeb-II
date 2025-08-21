<?php
//declaração das variáveis
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

//verifica as condições e mostra no HTML
if($num1 >= $num2 && $num1 >= $num3){
    echo "O maior número é: " . $num1;
}else if($num2 >= $num1 && $num2 >= $num3){
    echo "O maior número é: " . $num2;
}else{
    echo "O maior número é: " . $num3;
}
?>