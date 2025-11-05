<?php
//incluindo a classe "Aluno" e a classe "AlunoController"
include_once(__DIR__ . "/../../model/Aluno.php");
include_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = ""; //estará no mesmo escopo do "include_once" do form
               // a variável "msgErro" poderá ser usado dentro do form.php
$aluno = NULL; //estará no mesmo escopo do "include_once" do form

//verificar se o usuário clico em "gravar"
if(isset($_POST['nome'])){
    //pegar os valores preenchidos no form
    //dados receberão tratamento com operador ternário
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : NULL;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : NULL;
    $estrangeiro = trim($_POST['estrang']) ? trim($_POST['estrang']) : NULL;
    $idCurso = is_numeric($_POST['curso']) ? $_POST['curso'] : NULL;

    //criando objeto Aluno -- persistência(?) para gravar os dados
    // e setando os atributos
    $aluno = new Aluno();
    $aluno->setId(0);
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
    $alunoCont = new AlunoController(); //criando objeto AlunoController
    $erros = $alunoCont->inserir($aluno);

    if(!$erros){
        header("location: listar.php"); //voltando para a página que lista os alunos
    }else{
        $msgErro = implode("<br>", $erros);
    }
}

include_once(__DIR__ . "/form.php");
?>