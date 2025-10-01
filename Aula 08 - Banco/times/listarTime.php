<?php
//mostra erros no PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("Connection.php");

//obtendo a conexão com o banco
$conn = Connection::getConnection(); /* " classe :: método" método de classe "static"*/
//print_r($conn); //mostra o que há na variável "$conn"

$sql = "SELECT * FROM times";

$stm = $conn ->prepare($sql); //preparando a instrução
$stm -> execute(); //executando a instrução

//armazena os resultados
$resultado = $stm -> fetchAll();
//print_r($resultado); //mostra o que está armazenado em $resultado
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times</title>
</head>
<body>
    <h1>Aula banco de dados - Times</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Excluir</th>
        </tr>
    
        <?php foreach($resultado as $result) : ?>
            <tr>
                <td> <?= $result['id']?> </td>
                <td> <?= $result['nome']?> </td>
                <td> <?= $result['cidade']?> </td>
                <td> <a href="excluirTime.php?id=<?= $result['id']?>" onclick="return confirm('Confirma a exclusão?')">Excluir</a> </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>