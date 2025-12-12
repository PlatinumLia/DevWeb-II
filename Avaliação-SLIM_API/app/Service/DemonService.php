<?php
namespace App\Service;

use App\Model\Demon;

class DemonService{
    public function validar(Demon $demon){
        $erros = array();

        if(!$demon->getNome()){
            array_push($erros, "Informe o nome!");
        }

        if(!$demon->getPreco()){
            array_push($erros, "Informe o preço!");
        }

        if(!$demon->getArcana()){
            array_push($erros, "Informe a Arcana!");
        }

        if(!$demon->getRacas()){
            array_push($erros, "Informe a raça!");
        }

        if(!$demon->getTipos()){
            array_push($erros, "Informe a fraqueza!");
        }

        return null;
    }
}
?>