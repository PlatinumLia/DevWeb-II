<?php
//declarando o array associativo 
$pessoa = array("nome" => "Lia", "idade" => "18");

//chamando o array associativo
echo $pessoa["nome"];

echo "<br><br>";
/*
//chamando todos os índices do array associativo
foreach($pessoa as $p){
    echo $p . "<br>";
}
*/

$pessoa2 = array("nome"=>"Júlia", "idade"=>"18");

$pessoas = array($pessoa, $pessoa2);

foreach($pessoas as $p){
    echo $p["nome"] . " - " . $p["idade"];
    echo "<br>";
}
?>