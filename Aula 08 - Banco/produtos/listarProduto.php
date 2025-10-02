<?php
//mostra erros no PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//incluindo o arquivo que permite a conexão
include_once("connectionP.php");

//obtendo a conexão com o banco
$connect = ConnectionP::getConnection();

//listar os dados da tabela
$sql = "SELECT * FROM produtos";
$stmInstruct = $connect -> prepare($sql); //prepara a instrução
$stmInstruct -> execute(); //executa a instrução

//armazenando os resultados
$dados = $stmInstruct -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração com Banco de Dados</title>
    <style>

    </style>
</head>
<body>
    <h1>PRODUTOS</h1>

    <table>
        <tr>
            <td>ID</td>
            <td>Descrição</td>
            <td>Unidade de Medida</td>
            <td>Excluir</td>
        </tr>
    </table>
</body>
</html>