<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("Pessoa.php");

$p1 = new Pessoa("Lia", "Mutsuki");
$p2 = new Pessoa("Yukko", "Nishitani");
$p3 = new Pessoa("Andye", "Kimiko");

echo $p1->nomeCompleto() . "<br>" . $p2->nomeCompleto() . "<br>" . $p3->nomeCompleto();
?>