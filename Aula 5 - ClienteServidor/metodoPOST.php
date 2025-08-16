<?php
//o método POST precisa da estrutura denominada Form data
//a extensão Thunder Client foi usada para passar os parâmetros no corpo da requisição HTTP 
echo "Parâmetros recebidos: <br>";

$nome = $_POST["nome"];
echo $nome . "<br>";

echo $_POST["idade"] . "<br>";
?>