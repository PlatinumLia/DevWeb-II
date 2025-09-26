<?php 
//declarando o array (esse já tem valores definidos, mas pode não ter nenhum valor dentro dele)
$numeros = array(5, 16, 7, 9, 12);

//imprimindo o array na tela
echo $numeros[3];

//mudando um valor dentro do array
$numeros[2] = 3;

echo "<br><br>Impressão dos elementos do array:<br><br>";
/*
for($i=0; $i<count($numeros); $i++){
    echo $numeros[$i] . "<br>";
}
*/

//inserindo novo elemento dentro do array
array_push($numeros, 8);

//for para percorrer cada elemento do array
foreach($numeros as $num){
    echo $num . "<br>";
}
?>