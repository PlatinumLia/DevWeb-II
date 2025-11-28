<?php
//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once(__DIR__ . "/../../model/Demon.php");
include_once(__DIR__ . "/../../controller/DemonController.php");
//include_once(__DIR__ . "/../../service/DemonService.php");

$msgErro = "";
$demon = NULL;

if(isset($_POST['nome'])){ //verificando se foi clicado em "gravar"
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : NULL;
    $preco = is_numeric($_POST['preco']) ? $_POST['preco'] : NULL;
    $idArcana = is_numeric($_POST['arcana']) ? $_POST['arcana'] : NULL;
    $idRaca = is_numeric($_POST['raca']) ? $_POST['raca'] : NULL;
    $idFraqueza = is_numeric($_POST['fraqueza']) ? $_POST['fraqueza'] : NULL;

    //criando objeto "Demon" para salvar os dados
    $demon = new Demon();
    $demon->setId(0);
    $demon->setNome($nome);
    $demon->setPreco($preco);

    if($idArcana){ //verifica se há um id para criar um objeto "Arcana"
        $arcana = new Arcana();
        $arcana->setId($idArcana);
        $demon->setArcana($arcana);
    }else{ //caso não haja -> seta como NULL
        $demon->setArcana(NULL);
    }

    if($idRaca){ //verifica se há um id para criar um objeto "Raça"
        $raca = new Racas();
        $raca->setId($idRaca);
        $demon->setRacas($raca);
    }else{ //caso não haja -> seta como NULL
        $demon->setRacas(NULL);
    }

    if($idFraqueza){ //verifica se há um id para criar um objeto "Tipos"
                    // o tipo será definido como uma fraqueza
        $tipo = new Tipos();
        $tipo->setId($idFraqueza);         
        $demon->setTipos($tipo);
    }else{ //caso não haja -> seta como NULL
        $demon->setTipos(NULL);
    }

    $demonCont = new DemonController();
    $erros = $demonCont->inserir($demon);

    if(!$erros){
        header("location:listar.php");
    }else{
        $msgErro = implode("<br>" . $erros);
    }
}

print_r($demon);

include_once(__DIR__ . "/form.php");
?>