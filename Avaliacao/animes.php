<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

$nome = "";
$episodios = "";
$estudio = "";
$autor = "";
$genero = "";

//verifica se há valores sendo enviados
if (isset($_POST['nome'])) {
    $nome = trim($_POST['nome']);
    $episodios = trim($_POST['episodio']);
    $estudio = trim($_POST['estudio']);
    $autor = trim($_POST['autor']);
    $genero = trim($_POST['genero']);

    //passou as validações, salva no arquivo
    $anime = array(
        "id" => uniqid(),
        "nome" => $nome,
        "episodio" => $episodios,
        "estudio" => $estudio,
        "autor" => $autor,
        "genero" => $genero
    );
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animes</title>
</head>

<body>
    <h1>Cadastro de animes</h1>
    <!-- formulário para a inserção dos dados de cadastro-->
    <form method="post">
        <input type="text" name="nome" id="nomeAnime" placeholder="Nome do anime"> <br><br>
        <input type="number" name="episodio" id="qtdEpisodio" placeholder="Quantidade de episódio"> <br><br>
        <input type="text" name="estudio" id="estudio" placeholder="Estúdio de animação"> <br><br>
        <input type="text" name="autor" id="autor" placeholder="Autor da obra">

        <select name="genero" id="genero">
            <option value="">--- Selecione uma opção ---</option>
            <option value="A">Ação</option>
            <option value="C">Comédia</option>
            <option value="D">Drama</option>
            <option value="E">Esporte</option>
            <option value="F">Fantasia</option>
            <option value="H">Horror</option>
            <option value="R">Romance</option>
            <option value="S">Suspense</option>
        </select>

        <input type="submit" value="Enviar">
    </form>

    <br><br>
    <h3>Animes Cadastrados</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quant. Episódios</th>
            <th>Estudio de animação</th>
            <th>Autor da obra</th>
            <th>Gênero</th>
        </tr>

        <?php foreach ($animes as $a): ?>
            <tr>
                <td><?php echo $a['id'] ?></td>
                <td><?= $a['nome'] ?></td>
                <td><?= $a['episodio'] ?></td>
                <td><?= $a['estudio'] ?></td>
                <td><?= $a['autor'] ?></td>
                <td><?= $a['genero'] ?></td>
                <td><a href="arqvExcluir.php?id=<? $a['id'] ?>" onclick="return confirm('Confirma a exclusão?')">Excluir</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>