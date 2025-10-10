<?php
//mostra erros no PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//incluindo o arquivo que permite a conexão
include_once("ConnectionP.php");

//obtendo a conexão com o banco
$conn = ConnectionP::getConnection();
print_r($conn);

//listar os dados da tabela
$sql = "SELECT * FROM produtos";
$stm = $connect -> prepare($sql); //prepara a instrução
$stm -> execute(); //executa a instrução

//armazenando os resultados
$dados = $stm -> fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
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

        <?php foreach($dados as $d) : ?>
            <tr>
                <td> <?= $d['id']?> </td>
                <td> <?= $d['descricao']?> </td>
                <td> <?= $d['un_medida']?> </td>
                <td> <a href="excluirProduto.php?id=<?= $d['id']?>" onclick="return confirm('Deseja mesmo excluir?')">Excluir</a> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>