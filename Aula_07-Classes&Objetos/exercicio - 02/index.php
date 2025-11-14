<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("Livro.php");

$l1 = new Livro("Verity", "Collen Hoover", "Romance", 320);
$l2 = new Livro("A Metamorfose", "Franz Kafka", "Ficção Absurdista", 112);
$l3 = new Livro("Uma Noite na Taverna", "Álvares de Azevedo", "Ficção", 160);

$livros = array($l1, $l2, $l3);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros - OOB</title>
    <style>
        table{
            margin-right: auto;
            margin-left: auto;
            border-collapse: collapse;
            border: 1px solid #000;
            width: auto;
        }

        th{
            color: white;
            background-color: green;
            border: 1px solid #000;
            border-collapse: collapse;
            width: auto;
            text-align: center;
            padding: 5px;
        }
        
        td{
            border: 1px solid #000;
            border-collapse: collapse;
            width: auto;
            text-align: center;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <th>Nome</th>
        <th>Autor(a)</th>
        <th>Gênero</th>
        <th>Quant. Páginas</th>

        <?php foreach($livros as $l): ?>    
            <tr>
                <td> <?= $l->getTitulo()?> </td>
                <td> <?= $l->getAutor()?> </td>
                <td> <?= $l->getGenero()?> </td>
                <td> <?= $l->getQtdPags()?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>