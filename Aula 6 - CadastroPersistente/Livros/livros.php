<?php
//mostra erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("persistencia.php");

//TO DO - buscar livros já salvos no arquivo
$livros = buscarDados("livros.json");
//print_r($livros);

$titulo = "";
$genero = "";
$paginas = "";
$autor = ""; 
$mensagemErro = "";

//verifica se os valores foram enviados
if(isset($_POST["titulo"])){
    //já clicou em "Enviar"
    $titulo = trim($_POST["titulo"]);
    $genero = trim($_POST["genero"]);
    $paginas = $_POST["paginas"];
    $autor = trim($_POST["autor"]);

    //validar os dados
    $erros = array();
    if($titulo == ''){
        array_push($erros, "Informe o título");
    }else if(strlen($titulo)<=3){
        array_push($erros, "Informe um título com mais de 3 caracteres");
    }

    if($genero == ''){
        array_push($erros, "Informe o gênero do livro");
    }

    if($paginas == ''){
        array_push($erros, "Informe o número de páginas");
    }else if($paginas <= 0){
        array_push($erros, "O número de páginas precisa ser maior que 0");
    }
    
    if($autor == ''){
        array_push($erros, "Informe o autor");
    }

    if(empty($erros)){
        //passou as validações, salva no arquivo
        $livro = array(
            "id" => uniqid(),
            "titulo" => $titulo,
            "genero" => $genero,
            "paginas" => $paginas,
            "autor" => $autor
        );
    
        array_push($livros, $livro);
        salvarDados($livros, "livros.json");
    
        header("location: livros.php"); //forçar o recarregamento da página para evitar o reenvio do formulário
    }else{
        $mensagemErro = implode("<br>", $erros);
    }
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
<!--- <form method="post" onsubmit="return validar();"> --->
<form method="post">
    <input type="text" name="titulo" id="titulo" placeholder="Informe o título" value="<?= $titulo?>"/>
    <br><br> 

    <select name="genero" id="genero">
        <option value="">--Selecione o gênero--</option>
        <!-- xxx ? xxx : xxx => operador ternário-->
        <option value="D" <?= $genero == 'D' ? 'selected' : '' ?> >Drama</option>
        <option value="F" <?= $genero == 'F' ? 'selected' : '' ?> >Ficção</option>
        <option value="R" <?= $genero == 'R' ? 'selected' : '' ?> >Romance</option>
        <option value="O" <?= $genero == 'O' ? 'selected' : '' ?> >Outro</option>
    </select>
    <br><br>

    <input type="number" name="paginas" id="numPaginas" placeholder="Informe o número de páginas" value="<?= $paginas?>"/>
    <br><br>
    
    <input type="text" name="autor" id="autor" placeholder="Informe o autor" value="<?= $autor?>">
    <br><br>

    <input type="submit" value="Enviar" />
</form>

<div id="divErro" style="color: red;">
    <?= $mensagemErro?>
</div>

<h3>Livros cadastrados</h3>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Gênero</th>
        <th>Quant. Páginas</th>
        <th>Autor</th>
        <th>Excluir</th>
    </tr>

    <?php foreach($livros as $l): ?>
        <tr>
            <td><?php echo $l['id']?></td>
            <td><?= $l['titulo']?></td>
            <td><?= $l['genero']?></td>
            <td><?= $l['paginas']?></td>
            <td><?= $l['autor']?></td>
            <td><a href="excluir.php?id=<? $l['id']?>" onclick="return confirm('Confirma a exclusão?')">Excluir</a></td>
        </tr>
    <?php endforeach;?>
</table>

<script src="validacao.js"></script>

</body>
</html>