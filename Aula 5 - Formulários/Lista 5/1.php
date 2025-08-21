<?php
//declaração das variáveis
// e verificação se os parâmetros estão sendo recebidos 
$num1 = "";
$num2 = "";
$operacao = "";
if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];
}

switch($operacao){
    case '+':
        $num1 + $num2;
    break;

    case '-':
        $num1 - $num2;
    break;

    case '*':
        $num1 * $num2;
    break;

    case '/':
        $num1 / $num2;
        if(0 == $num2){
            echo "Não é possível dividir por 0!";
            return 0;
            break;
        }
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Digite um número">
        <br><br>
        <input type="number" name="num2" placeholder="Digite um número">
        <br><br>
        <select name="operacao">
            <option value="">--- Selecione a operação ---</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>