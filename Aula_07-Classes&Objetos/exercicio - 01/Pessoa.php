<?php
class Pessoa{
    //atributos
    private string $nome;
    private string $sobrenome;

    //construtor
    public function __construct($nome="", $sobrenome=""){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    //método
    public function nomeCompleto(){
        $nomeCompleto = $this->nome . " " . $this->sobrenome;
        return $nomeCompleto;
    }

    //Get do valor nome
    public function getNome(): string
    {
        return $this->nome;
    }
    //Set do valor nome
    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    //Get do valor sobrenome
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }
    //Set do valor sobrenome
    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;
        return $this;
    }
}
?>