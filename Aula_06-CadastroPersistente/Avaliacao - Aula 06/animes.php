<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("persistencia.php");

//declaração das variáveis
$animes = buscarDados("animes.json");
$nome = "";
$episodio = "";
$estudio = "";
$autor = "";
$genero = "";
$msgErro = "";

//verifica se há valores sendo enviados
if (isset($_POST['nome'])) {
    $nome = trim($_POST['nome']);
    $episodio = trim($_POST['episodio']);
    $estudio = trim($_POST['estudio']);
    $autor = trim($_POST['autor']);
    $genero = trim($_POST['genero']);

    //verifica se há erros nos campos e os junta em um array
    // para mostrar na página HTML
    $erro = array();
    if($nome == ""){
        array_push($erro, "Informe o nome do anime!");
    }else if(strlen($nome) < 2){
        array_push($erro, "O nome do anime precisa ter 2 ou mais caracteres!");
    }

    if($episodio == ""){
        array_push($erro, "Informe o número de episódios!");
    }else if($episodio <= 0){
        array_push($erro, "O número de episódios precisa ser maior que 0!");
    }

    if($estudio == ""){
        array_push($erro, "Informe o nome do estúdio de animação!");
    }else if(strlen($estudio) < 2){
        array_push($erro, "O nome do estúdio de animação precisa ter 2 ou mais caracteres!");
    }

    if($autor == ""){
        array_push($erro, "Informe o nome do autor original da obra!");
    }
    if($genero == ""){
        array_push($erro, "Informe o genêro do anime!");
    }
    
    if(empty($erro)) {
        //passou as validações, salva no arquivo
        $anime = array(
            "id" => uniqid(),
            "nome" => $nome,
            "episodio" => $episodio,
            "estudio" => $estudio,
            "autor" => $autor,
            "genero" => $genero
        );
        array_push($animes, $anime);
        salvarDados($animes, "animes.json");
        header("location: animes.php");
    }else{
        //mostra os erros armazenados no array
        $msgErro = implode("<br>", $erro);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Cadastro de animes</h1>
    <!-- formulário para a inserção dos dados de cadastro-->
    <form method="post">
        <input type="text" name="nome" id="nomeAnime" placeholder="Nome do anime" value="<?= $nome ?>">
        <input type="number" name="episodio" id="qtdEpisodio" placeholder="Nº de episódios" value="<?= $episodio ?>">
        <input type="text" name="estudio" id="estudio" placeholder="Estúdio de animação" value="<?= $estudio ?>">
        <input type="text" name="autor" id="autor" placeholder="Autor(a) da obra original" value="<?= $autor ?>">

        <select name="genero" id="genero">
            <option value="">--- Selecione um gênero ---</option>
            <option value="A" <?= $genero == 'A' ? 'selected' : '' ?>>Ação</option>
            <option value="C" <?= $genero == 'C' ? 'selected' : '' ?>>Comédia</option>
            <option value="D" <?= $genero == 'D' ? 'selected' : '' ?>>Drama</option>
            <option value="E" <?= $genero == 'E' ? 'selected' : '' ?>>Esporte</option>
            <option value="F" <?= $genero == 'F' ? 'selected' : '' ?>>Fantasia</option>
            <option value="H" <?= $genero == 'H' ? 'selected' : '' ?>>Horror</option>
            <option value="R" <?= $genero == 'R' ? 'selected' : '' ?>>Romance</option>
            <option value="S" <?= $genero == 'S' ? 'selected' : '' ?>>Suspense</option>
        </select>

        <input type="submit" id="botaoEnviar" value="Enviar">
    </form>

    <?php if(empty($erros)) : ?> <!--- A mensagem só apoarece quando tiver algum erro---->
        <div id="divErro">
            <?= $msgErro?>
        </div>
    <?php endif; ?> 

    <h3>Animes Cadastrados</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quant. Episódios</th>
            <th>Estudio de animação</th>
            <th>Autor da obra</th>
            <th>Gênero</th>
            <th>Excluir</th>
        </tr>

        <?php foreach ($animes as $a): ?>
            <tr>
                <td> <?= $a['id'] ?> </td>
                <td> <?= $a['nome'] ?> </td>
                <td> <?= $a['episodio'] ?> </td>
                <td> <?= $a['estudio'] ?> </td>
                <td> <?= $a['autor'] ?> </td>
                <td>
                    <?php 
                        if($a['genero'] == 'A'){
                            echo "Ação";
                        }else if($a['genero'] == 'C'){
                            echo "Comédia";
                        }else if($a['genero'] == 'D'){
                            echo "Drama";
                        }else if($a['genero'] == 'E'){
                            echo "Esporte";
                        }else if($a['genero'] == 'F'){
                            echo "Fantasia";
                        }else if($a['genero'] == 'H'){
                            echo "Horror";
                        }else if($a['genero'] == 'R'){
                            echo "Romance";
                        }else if($a['genero'] == 'S'){
                            echo "Suspense";
                        }    
                    ?>
                </td>
                <td> <a href="excluir.php?id=<? $l['id'] ?>" onclick="return confirm('Confirma a exclusão?')"> Excluir </a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>