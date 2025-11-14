<?php

class Curso {

    //Atributos
    private ?int $id;
    private ?string $nome;
    private ?string $turno;

    //Métodos
    public function getTurnoDesc() {
        if($this->turno == 'N'){
            return "Noturno";
        }else if($this->turno == 'M'){
            return "Matutino";   
        }else if($this->turno == 'V'){
            return "Vespertino";
        }
        return "";
    }

    public function getNomeTurno() {
        return $this->nome . " - " . $this->getTurnoDesc();
    }


    //GETs e SETs
    //Get e Set do id
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    //Get e Set do nome
    public function getNome(): ?string
    {
        return $this->nome;
    }
    public function setNome(?string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    //Get e Set do turno
    public function getTurno(): ?string
    {
        return $this->turno;
    }
    public function setTurno(?string $turno): self
    {
        $this->turno = $turno;
        return $this;
    }
}