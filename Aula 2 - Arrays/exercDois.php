<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*Exercício de Array Associativo*/

//declaração dos arrays 
$pessoa1 = array("nome" => "Manuel de Medeiros", "endereço" => "Rua das Acácias", "cidade" => "Foz do Iguaçu", "UF" => "PR");
$pessoa2 = array("nome" => "Juliana de Amaral", "endereço" => "Rua dos Pinheiros", "cidade" => "Florianópolis", "UF" => "SC");
$pessoa3 = array("nome" => "Rodrigo Baidek", "endereço" => "Rua Dom Pedro I", "cidade" => "Petrópolis", "UF" => "RJ");
$pessoa4 = array("nome" => "Fabíola da Silva", "endereço" => "Rua Chile", "cidade" => "Guarulhos", "UF" => "SP");

//declarando o array associativo
$pessoas = array($pessoa1, $pessoa2, $pessoa3, $pessoa4);

echo "<table border = 1>"; //mostar em tabela no HTML
echo "<tr>"; //cria linha na tabela no HTML
echo "<th>" . "Nome" . "</th>";     //|
echo "<th>" . "Endereço" . "</th>"; //|
echo "<th>" . "Cidade" . "</th>";   //| Campos de título da tabela
echo "<th>" . "UF" . "</th>";       //|
echo "</tr>";                       //|

foreach($pessoas as $pa){
    echo "<tr>"; //cria as linhas com os dados do array associativo                     

    echo "<td>"; //mostra os elementos do array assocaitivo dentro da tabela  
    echo $pa["nome"];
    echo "</td>";
    
    echo "<td>" . $pa["endereço"] . "</td>";
    echo "<td>" . $pa["cidade"] . "</td>";
    echo "<td>" . $pa["UF"] . "</td>";

    echo "</tr>";
}
echo "</table>"; //fecha a tag <table>
?>