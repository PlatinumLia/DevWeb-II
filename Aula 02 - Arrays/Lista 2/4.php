<?php
//declaração das variáveis com os arrays associativos
$eclipse = array("modelo" => "Eclipse", "marca" => "Mitsubishi", "img" => "./img/eclipseMitsubishi.jpg");
$galant = array("modelo" => "Galant", "marca" => "Mitsubishi", "img" => "./img/galantMitsubishi.jpg");
$lancer = array("modelo" => "Lancer", "marca" => "Mitsubishi", "img" => "./img/lancerMitsubishi.jpg");
$onix = array("modelo" => "Onix", "marca" => "Chevrolet", "img" => "./img/onixChevrolet.jpeg");
$polo = array("modelo" => "Polo", "marca" => "Volkswagen", "img" => "./img/poloVolkswagen.jpg");
$carros = array($eclipse, $galant, $lancer, $onix, $polo);

foreach($carros as $itens){
    echo "<div style='border': solid 1px; width: 300px; margin-top: 20px>";
    echo $itens["modelo"] . "<br>";
    echo $itens["marca"] . "<br>";
    echo "<img src='" . $itens["img"] . "'style='width: 50%'; height: auto>";
    echo "</div>";
}
?>