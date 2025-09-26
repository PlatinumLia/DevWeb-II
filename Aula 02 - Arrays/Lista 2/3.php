<?php
//declaração das variáveis contendo os arrays
$flores = array("Orquídea", "Margarida", "Petúnia");
$frutas = array("Laranja", "Maçã", "Limão");
$cidades = array("Foz do Iguaçu", "Cascavel", "Toledo");
$locaisTuristicos = array("Itaipu", "Cataratas", "Parque das aves");
$listaTudo = array($flores, $frutas, $cidades, $locaisTuristicos);

echo "<table border = 1>";
foreach($listaTudo as $lT){
    echo "<tr>
    <td>$lT[0]</td>
    <td>$lT[1]</td>
    <td>$lT[2]</td> 
    <td>$lT[3]</td>
    </tr>";    
}
echo "</table>";

?>