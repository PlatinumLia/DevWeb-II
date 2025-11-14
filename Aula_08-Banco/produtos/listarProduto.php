<?php
//mostra erros no PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//incluindo o arquivo que permite a conexão
include_once("Connection.php");

//obtendo a conexão com o banco
$conn = ConnectionP::getConnection();
print_r($conn);

//listar os dados da tabela
$sql = "SELECT * FROM produtos";
$stm = $conn -> prepare($sql); //prepara a instrução
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
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        *{
            padding: 0;
            margin: 0;
        }

        :root{
            --platinum: #dee2e6ff;
            --french-gray: #ced4daff;
            --slate-gray: #6c757dff;
            --outer-space: #495057ff;
            --onyx: #343a40ff;
            --eerie-black: #212529ff;
            --black: rgb(12, 13, 14);
            --blue: rgb(0, 128, 255);
            --purple:#3c096c;
            --fonteTitutlo: "Robto", sans-serif;
            --fonteTexto: "Open Sans", sans-serif;
        }

        body{
            background-color: var(--black);
        }
        
        table{
            border: 2px var(--french-gray) solid;
            border-radius: 2px;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }


        h1{
            font-family: var(--fonteTitutlo);
            text-align: center;
            color: var(--french-gray);
            font-size: 25px;
            padding: 10px;
            margin-top: 5px;
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
        }
        
        th{
            border: 2px var(--french-gray) solid;
            border-radius: 2px;
            background-color: var(--outer-space);
            color: var(--platinum);
            padding: 3px;
        }

        td{
            text-align: center;
            color: var(--platinum);
            border: 2px var(--french-gray) solid;
            border-radius: 2px;
            background-color: var(--outer-space);
            padding: 0 3px;
        }

        a{
            text-decoration: none;
            color: var(--blue);
        }
        a:hover{
            color: var(--purple);
        }
    </style>
</head>
<body>
    <h1>PRODUTOS</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Unidade de Medida</th>
            <th>Excluir</th>
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