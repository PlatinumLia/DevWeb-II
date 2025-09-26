<?php
/* 
Exercício de Array Indexado
*/

//declaração de variáveis
$nomes = array("Makoto", "Kotone", "Aigis", "Narukami", "Ren");
$personas = array("Orpheus", "Thanatos", "Palladion", "Izanagi", "Arsène");
$arcanas = array("Fool", "Chariot", "Justice", "Tower", "Aeon");
$musicas = array("Burn My Dread", "Disconnected", "Soul Phrase", "Pursuing My True Self", "Wake Up, Get Up, Get Out There");

//imprimindo os arrays no HTML
echo "Nomes:" . "<br>";
echo "<ol>"; //precisa ser antes do foreach para não imprimir (o tamanho do array) 5 tags <ol>
foreach($nomes as $n){
    echo "<li>" . $n . "</li>";
}
echo "</ol>"; //fecha a tag <ol>

echo "Personas:" . "<br>";
echo "<ol>";
foreach($personas as $p){
    echo "<li>" . $p . "</li>";
}
echo "</ol>";

echo "Arcanas:" . "<br>";
echo "<ol>";
foreach($arcanas as $a){
    echo "<li>" . $a . "</li>";
}
echo "</ol>";

echo "Músicas:" . "<br>";
echo "<ol>";
foreach($musicas as $m){
    echo "<li>" . $m . "</li>";
}
echo "</ol>";
?>