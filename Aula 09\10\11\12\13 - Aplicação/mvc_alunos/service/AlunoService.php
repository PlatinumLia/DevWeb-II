<?php
include_once(__DIR__ . "/../model/Aluno.php"); //incluíndo o arquivo da classe Aluno

class AlunoService{
    public function validar(Aluno $aluno){ //método para validar os dados dos alunos
        $erros = array();
        
        //if($aluno->getNome() == NULL) ==> pode ser feito dessa forma
        
        if(!$aluno->getNome()){ //validar se o nome está preenchido (aplicando a regra de encapsulamento)
            array_push($erros, "Informe o nome.");
        }
        //validar se a idade está preenchida
        if(!$aluno->getIdade()){
            array_push($erros, "Informe a idade.");
        }
        //validar se o estrangeiro está preenchido
        if(!$aluno->getEstrangeiro()){
            array_push($erros, "Informe o estrangeiro.");
        }
        //validar se o curso está preenchido
        if(!$aluno->getCurso()){
            array_push($erros, "Informe o curso.");
        }
        return $erros;
    }
}
?>