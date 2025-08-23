<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("persistencia.php");

//TO DO - buscar livros já salvos no arquivo
$livros = buscarDados("livros.json");
//print_r($livros);

//verifica se os valores foram enviados
if(isset($_POST["titulo"])){
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $paginas = $_POST["paginas"];

    $livro = array(
        "id" => uniqid(),
        "titulo" => $titulo,
        "genero" => $genero,
        "paginas" => $paginas
    );

    array_push($livros, $livro);
    salvarDados($livros, "livros.json");

    header("location: livros.php"); //forçar o recarregamento da página para evitar o reenvio do formulário
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>

<h1>Cadastro de livros</h1>

<h3>Cadastre seu livro aqui</h3>
<form method="post">
    <input type="text" name="titulo" placeholder="Informe o título" />
    <br><br> 

    <select name="genero">
        <option value="">--Selecione o gênero--</option>
        <option value="D">Drama</option>
        <option value="F">Ficção</option>
        <option value="R">Romance</option>
        <option value="O">Outro</option>
    </select>
    <br><br>

    <input type="number" name="paginas" placeholder="Informe o número de páginas">
    <br><br>

    <input type="submit" value="Enviar" />
</form>

<h3>Livros cadastrados</h3>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Gênero</th>
        <th>Quant. Páginas</th>
        <th>Excluir</th>
    </tr>

    <?php foreach($livros as $l): ?>
        <tr>
            <td><?php echo $l['id']?></td>
            <td><?= $l['titulo']?></td>
            <td><?= $l['genero']?></td>
            <td><?= $l['paginas']?></td>
            <td><a href="excluir.php?id=<? $l['id']?>" onclick="return confirm('Confirma a exclusão?')">Excluir</a></td>
        </tr>
    <?php endforeach;?>
</table>

</body>
</html>