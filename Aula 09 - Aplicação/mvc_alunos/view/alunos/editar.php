<?php
include_once(__DIR__ . "/../../controller/AlunoController.php");

$alunoCont = new AlunoController();
$msgErro = "";
$aluno = NULL;

if(isset($_POST['nome'])){ //2ª etapa:
    //já clicou no gravar
    //pegar os valores preenchidos no form
    //dados receberão tratamento com operador ternário
    //diferença do editar para o inserir: terá uma variável pegando o id
    $id = $_POST['id'];
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : NULL;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : NULL;
    $estrangeiro = trim($_POST['estrang']) ? trim($_POST['estrang']) : NULL;
    $idCurso = is_numeric($_POST['curso'] ? $_POST['curso'] : NULL);

    $aluno = new Aluno();
    $aluno->setId($id);
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrangeiro);

    //verificando se há um id para criar um objeto curso
    if($idCurso){ //caso haja -> cria um objeto Curso e setando seu atributo "id"
        $curso = new Curso();
        $curso->setId($idCurso);
        $aluno->setCurso($curso);
    }else{ //caso não haja -> seta como NULL
        $aluno->setCurso(NULL);
    }
    //print_r($aluno); //verificando o que há no objeto $aluno
    //variável para capturar os erros 
    $erros = $alunoCont->editar($aluno); //chamando o controller para salvar a edição

    if(!$erros){
        header("location: listar.php"); //voltando para a página que lista os alunos
    }else{
        $msgErro = implode("<br>", $erros);
    }
}else{ //1ª etapa: 
    //abriu o form para fazer a edição dos dados
    $id = 0;
    if(isset($_GET['id'])){ //verificando se há o id
        $id = $_GET['id'];
    }

    $aluno = $alunoCont->buscarPorId($id);
    if(!$aluno){ //tratamento
        echo "Aluno não encontrado. <br>";
        echo "<a href='listar.php'>Voltar</a>";
        exit; //para a requisiçao
    }
}

include_once(__DIR__ . "/form.php");
?>