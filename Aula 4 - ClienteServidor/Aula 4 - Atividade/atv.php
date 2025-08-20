<?php
//declaração das variáveis
// e verificação se os parâmetros estão sendo passados na URL por GET
$inicio = "";
$razao = "";
$quantidadeTermos = "";
if(isset($_GET['inicio']) && isset($_GET['razao']) && isset($_GET['qtdTermos'])){
    $inicio = $_GET['inicio'];
    $razao = $_GET['razao'];
    $quantidadeTermos = $_GET['qtdTermos'];
}

$i = 0; // variável para poder rodar o laço while
if($inicio == NULL && $razao == NULL && $quantidadeTermos == NULL){
    echo "Nenhum parâmetro foi digitado na URL.";
}else if ($inicio == NULL){
    echo "Não foi digitado o número que a P.A começa na URL.";
}else if($razao == NULL){
    echo "Não foi digitada a razão que a P.A deve seguir na URL.";
}else if($quantidadeTermos == NULL){
    echo "Não foi digitado a quantidade de Nº que a P.A deve ter na URL.";
}else{
    echo "Parâmetros recebidos <br>";
    echo "Início: " . $inicio . "<br>" . "Razão: " . $razao . "<br>" . "Quantidade de termos: " . $quantidadeTermos . "<br><br>" . "P.A:<br>";
    while($i < $quantidadeTermos){
    echo $inicio . "<br>";
    $inicio += $razao;
    ++$i; 
    }
}    
?>